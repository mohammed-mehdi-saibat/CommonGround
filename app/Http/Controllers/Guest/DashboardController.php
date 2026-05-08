<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Bed;
use App\Models\BookingItem;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $month = $request->query('month', Carbon::now()->month);
        $year = $request->query('year', Carbon::now()->year);
        
        $currentMonth = Carbon::createFromDate($year, $month, 1);
        $startOfMonth = $currentMonth->copy()->startOfMonth();
        $endOfMonth = $currentMonth->copy()->endOfMonth();
        
        $totalBeds = Bed::where('is_functional', true)->count();

        // Get all booked bed counts per day
        $bookedItems = BookingItem::whereHas('booking', function($q) {
                $q->where('status', '!=', 'cancelled');
            })
            ->where(function($q) use ($startOfMonth, $endOfMonth) {
                $q->where(function($sub) use ($startOfMonth, $endOfMonth) {
                    $sub->whereBetween('check_in', [$startOfMonth, $endOfMonth])
                        ->orWhereBetween('check_out', [$startOfMonth, $endOfMonth])
                        ->orWhere(function($inner) use ($startOfMonth, $endOfMonth) {
                            $inner->where('check_in', '<', $startOfMonth)
                                  ->where('check_out', '>', $endOfMonth);
                        });
                });
            })
            ->get();

        // Get current user's booked days
        $userBookedDays = BookingItem::whereHas('booking', function($q) {
                $q->where('user_id', auth()->id())
                  ->where('status', '!=', 'cancelled');
            })
            ->where(function($q) use ($startOfMonth, $endOfMonth) {
                $q->where(function($sub) use ($startOfMonth, $endOfMonth) {
                    $sub->whereBetween('check_in', [$startOfMonth, $endOfMonth])
                        ->orWhereBetween('check_out', [$startOfMonth, $endOfMonth]);
                });
            })
            ->get();

        $availability = [];
        $currentDate = $startOfMonth->copy();

        while ($currentDate <= $endOfMonth) {
            $dateString = $currentDate->toDateString();
            $bookedCount = 0;
            $isUserReserved = false;

            foreach ($bookedItems as $item) {
                if ($currentDate >= $item->check_in->startOfDay() && $currentDate < $item->check_out->startOfDay()) {
                    $bookedCount++;
                }
            }

            foreach ($userBookedDays as $item) {
                if ($currentDate >= $item->check_in->startOfDay() && $currentDate < $item->check_out->startOfDay()) {
                    $isUserReserved = true;
                    break;
                }
            }

            $availability[$dateString] = [
                'day' => $currentDate->day,
                'available' => ($totalBeds - $bookedCount) > 0,
                'remaining' => $totalBeds - $bookedCount,
                'is_reserved' => $isUserReserved,
                'date' => $dateString
            ];

            $currentDate->addDay();
        }

        return view('guest.dashboard', [
            'availability' => $availability,
            'monthName' => $currentMonth->format('F Y'),
            'currentMonth' => $month,
            'currentYear' => $year,
            'totalBeds' => $totalBeds,
            'firstDayOffset' => $startOfMonth->dayOfWeek,
            'prevMonth' => $currentMonth->copy()->subMonth(),
            'nextMonth' => $currentMonth->copy()->addMonth(),
        ]);
    }

    public function getAvailability(Request $request)
    {
        $date = Carbon::parse($request->date)->startOfDay();
        
        // Find beds already booked for this specific date
        $bookedBedIds = BookingItem::whereHas('booking', function($q) {
                $q->where('status', '!=', 'cancelled');
            })
            ->where('check_in', '<=', $date)
            ->where('check_out', '>', $date)
            ->pluck('bed_id');

        $availableBeds = Bed::with(['dorm.category'])
            ->where('is_functional', true)
            ->whereNotIn('id', $bookedBedIds)
            ->get()
            ->groupBy('dorm_id');

        $formatted = $availableBeds->map(function($beds) {
            $dorm = $beds->first()->dorm;
            return [
                'dorm_name' => $dorm->name,
                'category' => $dorm->category->name,
                'price' => $dorm->category->base_price,
                'beds' => $beds->map(function($bed) {
                    return [
                        'id' => $bed->id,
                        'number' => $bed->bed_number
                    ];
                })
            ];
        });

        return response()->json($formatted);
    }
}

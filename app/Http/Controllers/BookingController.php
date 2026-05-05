<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookingRequest;
use App\Models\Bed;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BookingController extends Controller
{
    public function create()
    {
        $beds = Bed::with('dorm.category')->where('is_functional', true)->get();

        return view('guest.bookings.create', compact('beds'));
    }

    public function store(StoreBookingRequest $request)
    {
        DB::transaction(function () use ($request) {
            $totalAmount = 0;
            $items = [];

            foreach ($request->beds as $item) {
                $bed = Bed::with('dorm.category')->findOrFail($item['bed_id']);

                $alreadyBooked = $bed->bookingItems()
                    ->whereHas('booking', fn($q) => $q->whereNotIn('status', ['cancelled']))
                    ->where(function ($q) use ($item) {
                        $q->whereBetween('check_in', [$item['check_in'], $item['check_out']])
                          ->orWhereBetween('check_out', [$item['check_in'], $item['check_out']])
                          ->orWhere(function ($q) use ($item) {
                              $q->where('check_in', '<=', $item['check_in'])
                                ->where('check_out', '>=', $item['check_out']);
                          });
                    })->exists();

                if ($alreadyBooked) {
                    abort(422, 'Bed ' . $bed->bed_number . ' is not available for the selected dates.');
                }

                $nights = (int) ceil(
                    (strtotime($item['check_out']) - strtotime($item['check_in'])) / 86400
                );

                $pricePerNight = $bed->dorm->category->base_price;
                $subtotal = $pricePerNight * $nights;
                $totalAmount += $subtotal;

                $items[] = [
                    'bed_id'          => $bed->id,
                    'check_in'        => $item['check_in'],
                    'check_out'       => $item['check_out'],
                    'price_per_night' => $pricePerNight,
                    'subtotal'        => $subtotal,
                ];
            }

            $booking = Booking::create([
                'user_id'          => Auth::id(),
                'reference_number' => strtoupper(Str::random(10)),
                'status'           => 'pending',
                'total_amount'     => $totalAmount,
                'notes'            => $request->notes,
                'booking_date'     => now(),
            ]);

            $booking->bookingItems()->createMany($items);
        });

        return redirect()->route('guest.bookings.index')->with('success', 'Booking created successfully!');
    }

    public function index()
    {
        $bookings = Booking::where('user_id', Auth::id())->latest()->paginate(10);

        return view('guest.bookings.index', compact('bookings'));
    }

    public function show(Booking $booking)
    {
        $this->authorize('view', $booking);

        $booking->load('bookingItems.bed.dorm.category');

        return view('guest.bookings.show', compact('booking'));
    }

    public function destroy(Booking $booking)
    {
        $this->authorize('delete', $booking);

        $booking->update(['status' => 'cancelled']);

        return redirect()->route('guest.bookings.index')->with('success', 'Booking cancelled successfully!');
    }
}

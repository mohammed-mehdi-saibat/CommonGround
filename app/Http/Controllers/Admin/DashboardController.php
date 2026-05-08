<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bed;
use App\Models\Booking;
use App\Models\Guest;
use App\Models\Payment;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalBookings = Booking::count();
        $activeGuests = Guest::count(); // Simplified for now
        $availableBeds = Bed::where('is_functional', true)->count();
        $revenue = Payment::where('status', 'paid')->sum('amount');

        return view('admin.dashboard', compact('totalBookings', 'activeGuests', 'availableBeds', 'revenue'));
    }
}

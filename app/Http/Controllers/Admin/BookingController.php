<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateBookingStatusRequest;
use App\Models\Booking;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::with('user')->latest()->paginate(10);

        return view('admin.bookings.index', compact('bookings'));
    }

    public function show(Booking $booking)
    {
        $booking->load('user', 'bookingItems.bed.dorm.category');

        return view('admin.bookings.show', compact('booking'));
    }

    public function update(UpdateBookingStatusRequest $request, Booking $booking)
    {
        $this->authorize('update', $booking);

        $booking->update(['status' => $request->status]);

        return redirect()->route('admin.bookings.show', $booking)->with('success', 'Booking status updated successfully!');
    }

    public function destroy(Booking $booking)
    {
        $this->authorize('delete', $booking);

        $booking->delete();

        return redirect()->route('admin.bookings.index')->with('success', 'Booking deleted successfully!');
    }
}

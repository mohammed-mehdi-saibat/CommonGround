<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Dorm;
use App\Models\BookingItem;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request, Dorm $dorm)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string|min:10',
        ]);

        // Check if user has a reservation in this dorm
        $hasReservation = BookingItem::whereHas('booking', function ($q) {
            $q->where('user_id', auth()->id())
              ->whereIn('status', ['confirmed', 'completed']);
        })
        ->whereHas('bed', function ($q) use ($dorm) {
            $q->where('dorm_id', $dorm->id);
        })
        ->exists();

        if (!$hasReservation) {
            return back()->with('error', 'You can only review dorms you have stayed in.');
        }

        Review::create([
            'user_id' => auth()->id(),
            'dorm_id' => $dorm->id,
            'rating' => $request->rating,
            'comment' => $request->comment,
        ]);

        return back()->with('success', 'Thank you for your review!');
    }
}

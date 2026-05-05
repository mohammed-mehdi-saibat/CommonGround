<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guest;

class GuestController extends Controller
{
    public function index()
    {
        $guests = Guest::with('user')->latest()->paginate(10);

        return view('admin.guests.index', compact('guests'));
    }

    public function show(Guest $guest)
    {
        $guest->load('user');

        return view('admin.guests.show', compact('guest'));
    }

    public function destroy(Guest $guest)
    {
        $this->authorize('delete', $guest);

        $guest->user->delete();

        return redirect()->route('admin.guests.index')->with('success', 'Guest deleted successfully!');
    }
}

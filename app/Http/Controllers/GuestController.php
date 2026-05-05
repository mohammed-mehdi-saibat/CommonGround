<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateGuestRequest;
use App\Models\Guest;
use Illuminate\Support\Facades\Auth;

class GuestController extends Controller
{
    public function show(Guest $guest)
    {
        $this->authorize('update', $guest);

        return view('guest.show', compact('guest'));
    }

    public function edit(Guest $guest)
    {
        $this->authorize('update', $guest);

        $user = Auth::user();

        return view('guest.edit', compact('guest', 'user'));
    }

    public function update(UpdateGuestRequest $request, Guest $guest)
    {
        $this->authorize('update', $guest);

        $guest->update($request->validated());

        return redirect()->route('guest.edit', $guest)->with('success', 'Profile updated successfully!');
    }
}

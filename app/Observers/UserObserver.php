<?php

namespace App\Observers;

use App\Models\User;
use App\Models\Guest;

class UserObserver
{
    /**
     * Handle the User "created" event.
     */
    public function created(User $user): void
    {
        if ($user->role == 'guest') {
            $user->guest()->create([
                'passport_number' => null,
                'nationality' => 'Unknown'
            ]);
        }

        if ($user->role === 'staff') {
            $user->staff()->create([
                'hired_at' => now(),
            ]);
        }
    }

    public function updated(User $user): void {}

    public function deleted(User $user): void {}

    public function restored(User $user): void {}

    public function forceDeleted(User $user): void {}
}

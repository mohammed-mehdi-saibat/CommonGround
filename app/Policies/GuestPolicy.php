<?php

namespace App\Policies;

use App\Models\Guest;
use App\Models\User;

class GuestPolicy
{
    public function viewAny(User $user): bool
    {
        return false;
    }

    public function view(User $user, Guest $guest): bool
    {
        return false;
    }

    public function create(User $user): bool
    {
        return false;
    }

    public function update(User $user, Guest $guest): bool
    {
        return $user->role === 'admin' || $user->id === $guest->user_id;
    }

    public function delete(User $user, Guest $guest): bool
    {
        return $user->role === 'admin';
    }

    public function restore(User $user, Guest $guest): bool
    {
        return false;
    }

    public function forceDelete(User $user, Guest $guest): bool
    {
        return false;
    }
}

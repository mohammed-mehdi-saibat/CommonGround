<?php

namespace App\Policies;

use App\Models\Staff;
use App\Models\User;

class StaffPolicy
{
    public function viewAny(User $user): bool
    {
        return false;
    }

    public function view(User $user, Staff $staff): bool
    {
        return $user->role === 'admin' || $user->id === $staff->user_id;
    }

    public function create(User $user): bool
    {
        return false;
    }

    public function update(User $user, Staff $staff): bool
    {
        return $user->role === 'admin' || $user->id === $staff->user_id;
    }

    public function delete(User $user, Staff $staff): bool
    {
        return $user->role === 'admin';
    }

    public function restore(User $user, Staff $staff): bool
    {
        return false;
    }

    public function forceDelete(User $user, Staff $staff): bool
    {
        return false;
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function ban(User $user)
    {
        abort_if($user->role === 'admin', 403);

        $user->update(['is_banned' => true]);

        return redirect()->back()->with('success', 'User banned successfully!');
    }

    public function unban(User $user)
    {
        $user->update(['is_banned' => false]);

        return redirect()->back()->with('success', 'User unbanned successfully!');
    }
}

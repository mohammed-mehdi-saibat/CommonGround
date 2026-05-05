<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateStaffRequest;
use App\Models\Staff;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class StaffController extends Controller
{
    use AuthorizesRequests;

    public function show(Staff $staff)
    {
        $this->authorize('view', $staff);

        return view('staff.show', compact('staff'));
    }

    public function edit(Staff $staff)
    {
        $this->authorize('update', $staff);

        $user = Auth::user();

        return view('staff.edit', compact('staff', 'user'));
    }

    public function update(UpdateStaffRequest $request, Staff $staff)
    {
        $this->authorize('update', $staff);

        $staff->update($request->validated());

        return redirect()->back()->with('success', 'Profile updated successfully!');
    }
}

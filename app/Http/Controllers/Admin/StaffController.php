<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStaffRequest;
use App\Models\Staff;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class StaffController extends Controller
{
    public function index()
    {
        $staff = Staff::with('user')->latest()->paginate(10);

        return view('admin.staff.index', compact('staff'));
    }

    public function create()
    {
        return view('admin.staff.create');
    }

    public function store(StoreStaffRequest $request)
    {
        DB::transaction(function () use ($request) {
            $user = User::create([
                'name'     => $request->name,
                'email'    => $request->email,
                'password' => $request->password,
                'role'     => 'staff',
            ]);

            $user->staff->update([
                'position'     => $request->position,
                'phone_number' => $request->phone_number,
                'hired_at'     => $request->hired_at ?? now(),
            ]);
        });

        return redirect()->route('admin.staff.index')->with('success', 'Staff member created successfully!');
    }

    public function destroy(Staff $staff)
    {
        $this->authorize('delete', $staff);

        $staff->user->delete();

        return redirect()->route('admin.staff.index')->with('success', 'Staff member deleted successfully!');
    }
}

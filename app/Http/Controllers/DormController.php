<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDormRequest;
use App\Http\Requests\UpdateDormRequest;
use App\Models\Dorm;
use Illuminate\Http\Request;

class DormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dorms = Dorm::with('category')->latest()->paginate(10);

        return view('admin.dorms.index', compact('dorms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.dorms.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDormRequest $request)
    {
        Dorm::create($request->validated());

        return redirect()->route('admin.dorms.index')->with('success', 'Dorm created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dorm $dorm)
    {
        return view('admin.dorms.show', compact('dorm'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dorm $dorm)
    {
        return view('admin.dorms.edit', compact('dorm'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDormRequest $request, Dorm $dorm)
    {
        $dorm->update($request->validated());

        return redirect()->route('admin.dorms.index')->with('success', 'Dorm updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dorm $dorm)
    {
        $dorm->delete();

        return redirect()->route('admin.dorms.index')->with('success', 'Dorm deleted successfully!');
    }
}

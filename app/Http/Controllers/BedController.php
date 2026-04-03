<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBedRequest;
use App\Http\Requests\UpdateBedRequest;
use App\Models\Bed;
use Illuminate\Http\Request;

class BedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $beds = Bed::with('dorm.category')->latest()->paginate(10);

        return view('admin.beds.index', compact('beds'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.beds.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBedRequest $request)
    {
        Bed::create($request->validated());

        return redirect()->route('admin.beds.index')->with('success', 'Bed Created Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bed $bed)
    {
        return view('admin.beds.show', compact('bed'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bed $bed)
    {
        return view('admin.beds.edit', compact('bed'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBedRequest $request, Bed $bed)
    {
        $bed->update($request->validated());

        return redirect()->route('admin.beds.index')->with('success', 'Bed Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bed $bed)
    {
        $bed->delete();

        return redirect()->route('admin.beds.index')->with('success', 'Bed Deleted Successfully!');
    }
}

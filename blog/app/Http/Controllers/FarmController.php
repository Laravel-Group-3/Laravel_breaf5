<?php

namespace App\Http\Controllers;

use App\Models\Farm;
use Illuminate\Http\Request;

class FarmController extends Controller
{
    public function index()
    {
        $farms = Farm::all();

        return view('farms.index', compact('farms'));
    }

    public function create()
    {
        return view('farms.create');
    }

    public function store(Request $request)
    {
        // Validate the input
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'address' => 'required',
            'price' => 'required|numeric',
            'num_guests' => 'required|integer',
            'num_bedrooms' => 'required|integer',
            'num_beds' => 'required|integer',
            'user_id' => 'required|exists:users,id',
            'status' => 'boolean',
            'images' => 'required|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Create a new farm instance
        $farm = Farm::create($validatedData);

        // Upload and attach images to the farm
        if ($request->hasFile('images')) {
            $images = $request->file('images');
            foreach ($images as $image) {
                $path = $image->store('farm_images');
                $farm->images()->create(['path' => $path]);
            }
        }

        return redirect()->route('farms.index')->with('success', 'Farm created successfully.');
    }

    public function show(Farm $farm)
    {
        return view('farms.show', compact('farm'));
    }

    public function edit(Farm $farm)
    {
        return view('farms.edit', compact('farm'));
    }

    public function update(Request $request, Farm $farm)
    {
        // Validate the input
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'address' => 'required',
            'price' => 'required|numeric',
            'num_guests' => 'required|integer',
            'num_bedrooms' => 'required|integer',
            'num_beds' => 'required|integer',
            'user_id' => 'required|exists:users,id',
            'status' => 'boolean',
            'images' => 'nullable|array',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Update the farm instance
        $farm->update($validatedData);

        // Upload and attach images to the farm
        if ($request->hasFile('images')) {
            $images = $request->file('images');
            foreach ($images as $image) {
                $path = $image->store('farm_images');
                $farm->images()->create(['path' => $path]);
            }
        }

        return redirect()->route('farms.index')->with('success', 'Farm updated successfully.');
    }

    public function destroy(Farm $farm)
    {
        // Delete the farm and its associated images
        $farm->images()->delete();
        $farm->delete();

        return redirect()->route('farms.index')->with('success', 'Farm deleted successfully.');
    }
}

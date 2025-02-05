<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Location;
use Illuminate\Support\Str;

class LocationController extends Controller
{
    public function index()
    {
        $locations = Location::paginate(20)->withQueryString();
        return view('admin.Locations.index', compact('locations'));
    }

    public function create()
    {
        return view('admin.Locations.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'location_name' => 'required',
        ]);

        Location::create([
            'name' => $request->location_name,
            'slug' => Str::slug($request->location_name),
        ]);
        return redirect()->route('locations.index')->with('success', 'Location created successfully.');
    }

    public function edit($uuid)
    {
        $location = Location::where('uuid', $uuid)->first();
        return view('admin.Locations.edit', compact('location'));
    }

    public function update(Request $request, $uuid)
    {
        $request->validate([
            'location_name' => 'required',
        ]);

        $location = Location::where('uuid', $uuid)->update([
            'name' => $request->location_name,
            'slug' => Str::slug($request->location_name),
        ]);
        return redirect()->route('locations.index')->with('success', 'Location updated successfully.');

    }

    public function destroy(Location $location)
    {
        $location->delete();
        return redirect()->back()->with('success', 'Location deleted successfully.');
    }

}

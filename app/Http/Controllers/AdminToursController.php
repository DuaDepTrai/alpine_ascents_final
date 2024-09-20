<?php

namespace App\Http\Controllers;

use App\Models\tours;
use Illuminate\Http\Client\Request;

class AdminToursController extends Controller
{
    /**
     * Display a listing of the restaurants.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $tours = tours::with('tours')->get();
        return view('admin.tours.index', compact('tours'));
    }

    /**
     * Show the form for creating a new restaurant.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.tours.create');
    }

    public function show($id)
    {

    }

    /**
     * Store a newly created restaurant in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'address' => 'required|max:255',
        ]);

        $tours = tours::create($validatedData);

        return redirect()->route('RestaurantManagement.index')
                         ->with('success', 'Restaurant created successfully.');
    }

    /**
     * Show the form for editing the specified restaurant.
     *
     * @param  \App\Models\tours  $tours
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $tour = tours::find($id)->first();
        return view('admin.tours.edit')->with('tour',$tour);
    }

    /**
     * Update the specified restaurant in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tours  $tours
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',

            'address' => 'required|max:255',
        ]);

        $tour = tours::findOrFail($id);
        $tour->update($validatedData);

        return redirect()->route('admin.tours.index')
                         ->with('success', 'Tours updated successfully.');
    }

    /**
     * Remove the specified restaurant from storage.
     *
     * @param  \App\Models\tours  $restaurant
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $tours = tours::find($id);
        $tours->delete();

        return redirect()->route('admin.tours.index')
                         ->with('success', 'Tours deleted successfully.');
    }
}

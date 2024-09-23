<?php

namespace App\Http\Controllers;

use App\Models\tours;
use Illuminate\Http\Request;

class AdminToursController extends Controller
{
    /**
     * Display a listing of the restaurants.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $tours = tours::all();
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
        'price' => 'required|max:255',
        'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'location' => 'required|max:255',
        'features' => 'required|max:255',
        'besttime' => 'required|max:255',
        'directions' => 'required|max:255',
        'trekkingroutes' => 'required|max:255',
        'items' => 'required|max:255',
        'cautions' => 'required|max:255',
        'requirements' => 'required|max:255',
    ]);

    // Tìm tour theo ID
    $tour = tours::find($request->id);

    // Nếu không tìm thấy tour, có thể xử lý thông báo lỗi
    if (!$tour) {
        return redirect()->route('admin.tours.index')
                         ->with('error', 'Tour not found.');
    }

    // Xử lý hình ảnh
    $currentImages = $tour->images ? json_decode($tour->images, true) : [];
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $path = $image->move(public_path('images'), $image->getClientOriginalName());
            $currentImages[] = 'images/' . $image->getClientOriginalName();  // Lưu đường dẫn ảnh
        }
    }

    // Cập nhật lại hình ảnh
    $tour->images = json_encode($currentImages);
    
    // Cập nhật các thuộc tính khác
    $tour->fill($validatedData);
    $tour->save(); // Cập nhật bản ghi

    return redirect()->route('admin.tours.index')
                     ->with('success', 'Tour updated successfully.');
}

    /**
     * Show the form for editing the specified restaurant.
     *
     * @param  \App\Models\tours  $tours
     * @return \Illuminate\View\View
     */
    public function edit($id)
{
    $tour = tours::findOrFail($id); // Sử dụng findOrFail để tự động xử lý lỗi 404
    return view('admin.tours.edit')->with('tour', $tour);
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
        'price' => 'required|max:255',
        'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'location' => 'required|max:255',
        'features' => 'required|max:255',
        'besttime' => 'required|max:255',
        'directions' => 'required|max:255',
        'trekkingroutes' => 'required|max:255',
        'items' => 'required|max:255',
        'cautions' => 'required|max:255',
        'requirements' => 'required|max:255',
    ]);

    // Tìm tour theo ID
    $tour = tours::findOrFail($id); // Sử dụng findOrFail để tự động xử lý lỗi 404

    // Xử lý hình ảnh
    $currentImages = $tour->images ? json_decode($tour->images, true) : [];
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $path = $image->move(public_path('images'), $image->getClientOriginalName());
            $currentImages[] = 'images/' . $image->getClientOriginalName(); // Lưu đường dẫn ảnh
        }
    }

    // Cập nhật lại hình ảnh
    $tour->images = json_encode($currentImages);

    // Cập nhật các thuộc tính khác
    $tour->fill($validatedData);
    $tour->save(); // Lưu bản ghi

    return redirect()->route('admin.tours.index')
                     ->with('success', 'Tour updated successfully.');
}

    /**
     * Remove the specified restaurant from storage.
     *
     * @param  \App\Models\tours  $restaurant
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $tour = tours::find($id);
        $tour->delete();

        return redirect()->route('admin.tours.index')
                         ->with('success', 'Tours deleted successfully.');
    }
}

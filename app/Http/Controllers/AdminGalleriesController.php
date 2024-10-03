<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\galleries;
use App\Models\tours;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminGalleriesController extends Controller
{
    public function index(Request $request)
    {
        // Retrieve the list of all tours
        // Khởi tạo query cho galleries
        $query = galleries::with('tour');

        // Kiểm tra và áp dụng tìm kiếm theo tên tour
        if ($request->has('tour_name') && $request->tour_name != '') {
            $query->whereHas('tour', function($q) use ($request) {
                $q->where('name', 'LIKE', '%' . $request->tour_name . '%');
            });
        }

        // Lấy danh sách gallery với điều kiện tìm kiếm nếu có
        $galleries = $query->get();

        // Lấy danh sách tất cả tours để hiển thị
        $tours = Tours::all();
        
        return view('admin.galleries.index', compact('tours', 'galleries'));
    }

    // Display form to upload image
    public function create()
    {
        $tours = tours::all();
        return view('admin.galleries.create', compact('tours'));
    }

    //Handle saving image to the database
    public function store(Request $request)
    {
        $request->validate([
            'tours_id' => 'required|exists:tours,id',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'videos.*' => 'nullable|url', // Change validation
        ]);

        // Check if the gallery record already exists
        $gallery = galleries::where('tours_id', $request->tours_id)->first();

        // If it doesn't exist, create a new record
        if (!$gallery) {
            $gallery = new galleries();
            $gallery->tours_id = $request->tours_id;
        }

        // Process image
        $currentImages = $gallery->images ? json_decode($gallery->images, true) : [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->move(public_path('images'), $image->getClientOriginalName());
                $currentImages[] = 'images/' . $image->getClientOriginalName();  // Lưu đường dẫn ảnh
            }
        }

        // Video processing
        $currentVideos = $gallery->videos ? json_decode($gallery->videos, true) : [];
        if ($request->input('videos')) {
            foreach ($request->input('videos') as $video) {
                if (!empty($video) && filter_var($video, FILTER_VALIDATE_URL)) {
                    $currentVideos[] = $video;
                }
            }
        }

        $gallery->images = json_encode($currentImages);
        $gallery->videos = json_encode($currentVideos);

        $gallery->save();

        return redirect()->back()->with('success', 'Images and videos have been successfully updated!');
    }

    public function edit($id)
    {
        $gallery = galleries::findOrFail($id);
        return view('admin.galleries.edit', compact('gallery'));
    }

    // Remove image from gallery
    public function deleteImage(Request $request, $id)
    {
        $gallery = galleries::findOrFail($id);
        $images = json_decode($gallery->images, true);

        // Remove image from the image list
        if (($key = array_search($request->image, $images)) !== false) {
            unset($images[$key]);
            // Delete image from the public/images folder if needed
            if (Storage::exists('public/images/' . $request->image)) {
                Storage::delete('public/images/' . $request->image);
            }
        }

        // Update the images field in the database
        $gallery->images = json_encode(array_values($images));
        $gallery->save();

        return redirect()->back()->with('success', 'Ảnh đã được xóa thành công.');
    }

    public function destroy($id)
    {
        // Find gallery by ID
        $gallery = galleries::findOrFail($id);

        // Lấy đường dẫn đến các ảnh
        $images = json_decode($gallery->images);

        // Delete image from the public/images folder
        foreach ($images as $image) {
            $imagePath = public_path('images/' . $image);
            if (file_exists($imagePath)) {
                unlink($imagePath); // Delete image file
            }
        }

        // Delete gallery from the database
        $gallery->delete();

        // Return to the gallery list page with a success message
        return redirect()->route('admin.galleries.index')->with('success', 'All images of the tour have been successfully deleted.');
    }
}

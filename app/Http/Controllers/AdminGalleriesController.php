<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\galleries;
<<<<<<< HEAD
=======
use App\Models\tours;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
>>>>>>> d739902ce222666f56824aabffba60a613d4cc84

class AdminGalleriesController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        $galleries = galleries::with('galleries')->get();
        return view('admin.galleries.index', compact('galleries'));
=======
        // Lấy danh sách tất cả các tour
        $tours = tours::all();
        $galleries = galleries::with('tour')->get();
        return view('admin.galleries.index', compact('tours', 'galleries'));
    }

    // Hiển thị form để upload ảnh
    public function create()
    {
        $tours = tours::all();
        return view('admin.galleries.create', compact('tours'));
    }

    // Xử lý việc lưu ảnh vào database
    public function store(Request $request)
    {
        $request->validate([
            'tours_id' => 'required|exists:tours,id',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'videos.*' => 'nullable|url', // Thay đổi validation
        ]);

        // Kiểm tra bản ghi galleries đã tồn tại chưa
        $gallery = galleries::where('tours_id', $request->tours_id)->first();

        // Nếu chưa tồn tại, tạo bản ghi mới
        if (!$gallery) {
            $gallery = new galleries();
            $gallery->tours_id = $request->tours_id;
        }

        // Xử lý hình ảnh
        $currentImages = $gallery->images ? json_decode($gallery->images, true) : [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->move(public_path('images'), $image->getClientOriginalName());
                $currentImages[] = 'images/' . $image->getClientOriginalName();  // Lưu đường dẫn ảnh
            }
        }

        // Xử lý video
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

        return redirect()->back()->with('success', 'Ảnh và video đã được cập nhật thành công!');
    }

    public function edit($id)
    {
        $gallery = galleries::findOrFail($id);
        return view('admin.galleries.edit', compact('gallery'));
    }

    // Xóa ảnh khỏi gallery
    public function deleteImage(Request $request, $id)
    {
        $gallery = galleries::findOrFail($id);
        $images = json_decode($gallery->images, true);

        // Xóa ảnh từ danh sách ảnh
        if (($key = array_search($request->image, $images)) !== false) {
            unset($images[$key]);
            // Xóa ảnh từ thư mục public/images nếu cần
            if (Storage::exists('public/images/' . $request->image)) {
                Storage::delete('public/images/' . $request->image);
            }
        }

        // Cập nhật lại trường images trong database
        $gallery->images = json_encode(array_values($images));
        $gallery->save();

        return redirect()->back()->with('success', 'Ảnh đã được xóa thành công.');
    }

    public function destroy($id)
    {
        // Tìm gallery theo id
        $gallery = galleries::findOrFail($id);

        // Lấy đường dẫn đến các ảnh
        $images = json_decode($gallery->images);

        // Xóa ảnh từ thư mục public/images
        foreach ($images as $image) {
            $imagePath = public_path('images/' . $image);
            if (file_exists($imagePath)) {
                unlink($imagePath); // Xóa file ảnh
            }
        }

        // Xóa gallery khỏi database
        $gallery->delete();

        // Trả về trang danh sách gallery với thông báo thành công
        return redirect()->route('admin.galleries.index')->with('success', 'Đã xóa toàn bộ ảnh của tour thành công.');
>>>>>>> d739902ce222666f56824aabffba60a613d4cc84
    }
    
}

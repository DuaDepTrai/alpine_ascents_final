<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;

class MediaLibraryController extends Controller
{
    public function index()
    {
        $directories = File::directories(public_path('images')); // Lấy danh sách các thư mục con trong 'public/media'

        $mediaLibraries = [];

        foreach ($directories as $dir) {
            $libraryName = basename($dir); // Lấy tên thư mục
            $images = File::files($dir); // Lấy danh sách các file trong thư mục

            $imageUrls = [];
            foreach ($images as $image) {
                $imageUrls[] = asset('images/' . $libraryName . '/' . basename($image)); // Tạo URL cho hình ảnh
            }

            $mediaLibraries[] = [
                'library' => $libraryName,
                'images' => $imageUrls,
            ];
        }

        return view('media.index', compact('mediaLibraries'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;

class MediaLibraryController extends Controller
{
    public function index()
    {
        $directories = File::directories(public_path('images')); // Get the list of subdirectories in 'public/images'

        $mediaLibraries = [];

        foreach ($directories as $dir) {
            $libraryName = basename($dir); //  Get the directory name
            $images = File::files($dir); // Get the list of files in the directory
            $imageUrls = [];
            foreach ($images as $image) {
                $imageUrls[] = asset('images/' . $libraryName . '/' . basename($image)); // TCreate URL for images
            }

            $mediaLibraries[] = [
                'library' => $libraryName,
                'images' => $imageUrls,
            ];
        }

        return view('media.index', compact('mediaLibraries'));
    }
}

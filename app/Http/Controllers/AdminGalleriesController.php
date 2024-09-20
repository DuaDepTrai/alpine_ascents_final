<?php

namespace App\Http\Controllers;

use App\Models\galleries;

class AdminGalleriesController extends Controller
{
    public function index()
    {
        $galleries = galleries::with('galleries')->get();
        return view('admin.galleries.index', compact('galleries'));
    }
    
}

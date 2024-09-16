<?php

namespace App\Http\Controllers;

use App\Models\galleries;
use App\Models\tours;

class AdminGalleriesController extends Controller
{
    public function index()
    {
        $galleries = tours::with('galleries')->get();
        return view('admin.galleries.index', compact('galleries'));
    }
}

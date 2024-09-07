<?php

namespace App\Http\Controllers;

use App\Models\galleries;
use App\Models\tours;

class GalleriesController extends Controller
{
    public function index()
    {
        $galleries = tours::with('galleries')->get(); 
        return view('galleries.index', compact('galleries'));
    }
}
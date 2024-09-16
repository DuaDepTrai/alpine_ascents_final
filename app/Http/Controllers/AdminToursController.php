<?php

namespace App\Http\Controllers;

use App\Models\tours;

class AdminToursController extends Controller
{
    public function index()
    {
        $galleries = tours::with('galleries')->get();
        return view('admin.tours.index', compact('galleries'));
    }
}

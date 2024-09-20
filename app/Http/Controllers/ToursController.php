<?php

namespace App\Http\Controllers;


use App\Models\tours;

class ToursController extends Controller
{
    public function index()
    {
        $galleries = tours::with('galleries')->get();
<<<<<<< HEAD
        return view('tours.detail', compact('galleries'));
=======
        return view('tours.index', compact('galleries'));
>>>>>>> d739902ce222666f56824aabffba60a613d4cc84
    }
}

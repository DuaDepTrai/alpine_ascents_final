<?php

namespace App\Http\Controllers;


use App\Models\tours;

class ToursController extends Controller
{
    public function index()
    {
        $galleries = tours::with('galleries')->get();
        return view('tours.detail', compact('galleries'));
        //return view('tours.index', compact('galleries'));
    }
}

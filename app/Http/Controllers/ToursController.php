<?php

namespace App\Http\Controllers;


use App\Models\tours;

class ToursController extends Controller
{
    public function index()
    {
        $tours = tours::all();
        return view('tours.index1', compact(var_name: 'tours'));
    }
    public function show($id)
{
    $tour = tours::findOrFail($id); // Tìm tour theo ID
    return view('tours.detail1', compact('tour')); // Trả về view với thông tin tour
}

    
}

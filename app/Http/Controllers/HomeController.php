<?php

namespace App\Http\Controllers;

use App\Models\tours; // Import model Tour
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Lấy tất cả các tour
        $tours = tours::all(); // Bạn có thể thay đổi nếu cần lọc hoặc giới hạn số lượng

        // Trả về view home.index với dữ liệu tours
        return view("home.index", compact('tours'));
    }
}

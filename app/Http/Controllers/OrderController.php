<?php

namespace App\Http\Controllers;

use App\Models\orders_tours;
use App\Models\tours;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // Hiển thị form đặt hàng với danh sách tours
    public function create()
    {
        $tours = Tours::all();
        return view('order.create', compact('tours'));
    }

    // Lưu thông tin đặt hàng
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'quantity' => 'required|integer|min:1',
            'tour_id' => 'required|exists:tours,id',
        ]);

        $order = Order::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'quantity' => $request->quantity,
            'tour_id' => $request->tour_id,
            'note' => $request->note,
        ]);

        return redirect()->back()->with('success', 'Đặt hàng thành công!');
    }
}





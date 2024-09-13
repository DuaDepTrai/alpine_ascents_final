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
        // Kiểm tra nếu người dùng chưa đăng nhập
        if (!auth()->check()) {
            return redirect()->back()->with('error', 'Bạn cần đăng nhập để đặt hàng.');
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:15',
            'email' => 'required|email|max:255',
            'quantity' => 'required|integer|min:1',
            'tour_id' => 'required|exists:tours,id',
        ]);

        $tour = Tours::find($request->tour_id);
        $total = $tour->price * $request->quantity;

        $order = orders_tours::create([
            'user_id' => auth()->user()->id, // Bắt buộc user_id
            'tour_id' => $request->tour_id,
            'quantity' => $request->quantity,
            'total' => $total,
            'email' => $request->email,
            'phone' => $request->phone,
            'note' => $request->note,
        ]);

        return redirect()->back()->with('success', 'Đặt hàng thành công!');
    }
}





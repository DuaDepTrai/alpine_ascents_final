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
    

        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15', // phone bắt buộc
            'email' => 'nullable|email|max:255', // email không bắt buộc
            'quantity' => 'required|integer|min:1',
            'tour_id' => 'required|exists:tours,id',
        ]);

        // Tính tổng số tiền
            $tour = Tours::find($request->tour_id);
            $total = $tour->price * $request->quantity;

         // Nếu người dùng đăng nhập, sử dụng user_id, nếu không, dùng tên từ request làm 'khách vãng lai'
            $userId = auth()->check() ? auth()->user()->id : null;
        
        // Lấy tên từ bảng users nếu người dùng đăng nhập, nếu không lấy từ form
            $userName = auth()->check() ? auth()->user()->name : $request->name;

        // Tạo đơn hàng  
        $order = orders_tours::create([
            'user_id' => $userId, // Nếu đăng nhập thì lấy user_id, không thì null
            'guest_name' => $userName, // Nếu không đăng nhập, lưu tên vào guest_name
            'tour_id' => $request->tour_id,
            'quantity' => $request->quantity,
            'total' => $total,
            'email' => $request->email, // email không bắt buộc
            'phone' => $request->phone, // phone bắt buộc
            'note' => $request->note,
        ]);

        return redirect()->back()->with('success', 'Đặt hàng thành công bởi: ' . $userName);
    }
}





<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\orders_tours;
use App\Models\tours;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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


        // Tạo đơn hàng
        $order = orders_tours::create([
            'user_id' => Auth::user()->id,
            'tour_id' => $request->tour_id,
            'quantity' => $request->quantity,
            'total' => $this->calculateTotal($request->tour_id, $request->quantity),
            'email' => $request->email, // email không bắt buộc
            'phone' => $request->phone, // phone bắt buộc
            'note' => $request->note,
        ]);

        return redirect()->back()->with('success', 'Order successfully placed by: ');
    }
    // Hàm tính tổng tiền
    protected function calculateTotal($tourId, $quantity)
    {
        $tour = tours::find($tourId);
        return $tour->price * $quantity;
    }
    

}



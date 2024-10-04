<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\orders_tours;
use App\Models\tours;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    // Display the list of orders
    public function index(Request $request)
    {
        // Tạo query để có thể áp dụng các điều kiện tìm kiếm và sắp xếp
        $query = orders_tours::join('tours', 'orders_tours.tour_id', '=', 'tours.id')
            ->select('orders_tours.*', 'tours.name as tour_name');

        // Kiểm tra và áp dụng tìm kiếm theo tên
        if ($request->has('name') && $request->name != '') {
            $query->where('orders_tours.name', 'LIKE', '%' . $request->name . '%');
        }
        // Kiểm tra và áp dụng tìm kiếm theo số điện thoại
        if ($request->has('phone') && $request->phone != '') {
            $query->where('orders_tours.phone', 'LIKE', '%' . $request->phone . '%');
        }
        // Kiểm tra và áp dụng tìm kiếm theo email
        if ($request->has('email') && $request->email != '') {
            $query->where('orders_tours.email', 'LIKE', '%' . $request->email . '%');
        }
        // Kiểm tra và áp dụng tìm kiếm theo tên tour
        // if ($request->has('tour_name') && $request->tour_name != '') {
        //     $query->where('tours.name', 'LIKE', '%' . $request->tour_name . '%');
        // }

        // Lấy danh sách tours và số lượng từ bảng
        $tours = tours::all(); // Lấy tất cả các tours để hiển thị trong select
        $quantities = orders_tours::select('quantity')->distinct()->get(); // Lấy các giá trị unique của quantity
        // Lọc theo tên tour (tour_name)
        if ($request->has('tour_name') && $request->tour_name != '') {
            $query->whereHas('tour', function ($q) use ($request) {
                $q->where('id', $request->tour_name); // Lọc theo tour ID
            });
        }
        // Lọc theo số lượng (quantity)
        if ($request->has('quantity') && $request->quantity != '') {
            $query->where('quantity', '=', $request->quantity);
        }
        // Lọc theo khoảng total (total amount range)
        if ($request->has('total_range') && $request->total_range != '') {
            $ranges = explode('-', $request->total_range); // Ví dụ: 0-5000000
            if (count($ranges) == 2) {
                $min = (int)trim($ranges[0]);
                $max = (int)trim($ranges[1]);
                $query->whereBetween('total', [$min, $max]);
            }
        }

        // Sắp xếp theo cột 'created_at' từ mới đến cũ
        $query->orderBy('orders_tours.created_at', 'desc');

        // Phân trang 15 user mỗi trang
        $orders = $query->paginate(15);  
        return view('admin.order.index', compact('orders', 'tours', 'quantities'));
    }

    // Display the order edit form
    public function edit($id)
    {
        $order = orders_tours::findOrFail($id);
        $tours = tours::all();
        return view('admin.order.edit', compact('order', 'tours'));
    }

    // Update order information
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'tour_id' => 'required|exists:tours,id',
            'email' => 'nullable|email|max:255',
            'phone' => 'required|string|max:11',
            'note' => 'nullable|string',
        ]);

        $order = orders_tours::findOrFail($id);
        $order->update([
            'tour_id' => $request->tour_id,
            'name' => $request->name,
            'quantity' => $request->quantity,
            'total' => $this->calculateTotal($request->tour_id, $request->quantity),
            'email' => $request->email,
            'phone' => $request->phone,
            'note' => $request->note,
        ]);

        return redirect()->route('admin.order.index')->with('success', 'Order updated successfully.');
    }

    // Delete order
        public function destroy($id)
    {
        $order = orders_tours::find($id);
        
        if ($order) {
            $order->delete();
            return response()->json(['success' => true]);
        }
        
        return response()->json(['success' => false], 404);
    }

    // Function to calculate total amount
    protected function calculateTotal($tourId, $quantity)
    {
        $tour = tours::find($tourId);
        return $tour->price * $quantity;
    }
}
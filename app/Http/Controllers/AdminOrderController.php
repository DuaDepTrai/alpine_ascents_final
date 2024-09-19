<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\orders_tours;
use App\Models\tours;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    // Hiển thị danh sách đơn hàng
    public function index()
    {
        $orders = orders_tours::with('tour', 'user')->get();
        return view('admin.order.index', compact('orders'));
    }

    // Hiển thị form chỉnh sửa đơn hàng
    public function edit($id)
    {
        $order = orders_tours::findOrFail($id);
        $tours = tours::all();
        return view('admin.order.edit', compact('order', 'tours'));
    }

    // Cập nhật thông tin đơn hàng
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'tour_id' => 'required|exists:tours,id',
            'email' => 'nullable|email|max:255',
            'phone' => 'required|string|max:15',
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

    // Xóa đơn hàng
    public function destroy($id)
    {
        $order = orders_tours::findOrFail($id);
        $order->delete();
        return redirect()->route('admin.order.index')->with('success', 'Order deleted successfully.');
    }

    // Hàm tính tổng tiền
    protected function calculateTotal($tourId, $quantity)
    {
        $tour = tours::find($tourId);
        return $tour->price * $quantity;
    }
}
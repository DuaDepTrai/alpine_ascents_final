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
        $query = orders_tours::with('tour', 'user');

       // Check if there is a search keyword
        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where('phone', 'LIKE', "%{$search}%");
        }
    
        $orders = $query->paginate(15);
        return view('admin.order.index', compact('orders'));
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

    // Delete order
        public function destroy($id)
    {
        $order = orders_tours::findOrFail($id);
        $order->delete();
        return redirect()->route('admin.order.index')->with('success', 'Order deleted successfully.');
    }

    // Function to calculate total amount
    protected function calculateTotal($tourId, $quantity)
    {
        $tour = tours::find($tourId);
        return $tour->price * $quantity;
    }
}
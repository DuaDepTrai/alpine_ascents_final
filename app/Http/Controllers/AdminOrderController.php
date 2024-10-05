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
        // Create a query to apply search conditions and sorting
        $query = orders_tours::join('tours', 'orders_tours.tour_id', '=', 'tours.id')
            ->select('orders_tours.*', 'tours.name as tour_name');

        // Check and apply search by name
        if ($request->has('name') && $request->name != '') {
            $query->where('orders_tours.name', 'LIKE', '%' . $request->name . '%');
        }
        // Check and apply search by phone
        if ($request->has('phone') && $request->phone != '') {
            $query->where('orders_tours.phone', 'LIKE', '%' . $request->phone . '%');
        }
        // Check and apply search by email
        if ($request->has('email') && $request->email != '') {
            $query->where('orders_tours.email', 'LIKE', '%' . $request->email . '%');
        }
        
        // Retrieve the list of tours and their counts from the table
        $tours = tours::all(); // Retrieve all tours to display in the select dropdown
        $quantities = orders_tours::select('quantity')->distinct()->get(); // Retrieve the unique values of quantity
        // Filter by tour name (tour_name)
        if ($request->has('tour_name') && $request->tour_name != '') {
            $query->whereHas('tour', function ($q) use ($request) {
                $q->where('id', $request->tour_name); // Filter by tour id
            });
        }
        // Filter by quantity
        if ($request->has('quantity') && $request->quantity != '') {
            $query->where('quantity', '=', $request->quantity);
        }
        // Filter by total amount range
        if ($request->has('total_range') && $request->total_range != '') {
            $ranges = explode('-', $request->total_range); // Example: 0-5000000
            if (count($ranges) == 2) {
                $min = (int)trim($ranges[0]);
                $max = (int)trim($ranges[1]);
                $query->whereBetween('total', [$min, $max]);
            }
        }

        // Sort by the 'created_at' column from newest to oldest
        $query->orderBy('orders_tours.created_at', 'desc');

        // Paginate 15 users per page
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
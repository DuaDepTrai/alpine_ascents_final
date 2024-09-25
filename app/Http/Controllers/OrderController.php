<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\orders_tours;
use App\Models\tours;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    // Display order form with list of tours
    public function create()
    {
        $tours = Tours::all();
        return view('order.create', compact('tours'));
    }

    // Display the confirmation page
    public function confirm(Request $request)
    {
        // Validate data before displaying the confirmation page
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:11',
            'email' => 'nullable|email|max:255',
            'quantity' => 'required|integer|min:1',
            'tour_id' => 'required|exists:tours,id',
            'note' => 'nullable|string'
        ]);
        

        // Get tour information
        $tour = Tours::find($request->tour_id);

        // Calculate total price
        $total = $this->calculateTotal($tour->id, $request->quantity);

        // Display the confirmation page with the entered information
        return view('order.confirm', [
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'quantity' => $request->quantity,
            'tour' => $tour,
            'total' => $total,
            'note' => $request->note,
        ]);
    }

    // Save order information after the user confirms
    public function store(Request $request)
    {
        // Check if the user is logged in
        $userId = Auth::check() ? Auth::user()->id : null;
        
        // Calculate total amount
        $total = $this->calculateTotal($request->tour_id, $request->quantity);

        // Create a new order in the database
        $order = orders_tours::create([
            'user_id' => $userId,
            'tour_id' => $request->tour_id,
            'name' => $request->name,
            'quantity' => $request->quantity,
            'total' => $total,
            'email' => $request->email,
            'phone' => $request->phone,
            'note' => $request->note,
        ]);

        // Redirect to success page after saving the order
        return redirect()->route('order.success')->with('success', 'Order successfully placed by: '.$request->name);
        
    }

    // Function to calculate total price
    protected function calculateTotal($tourId, $quantity)
    {
        $tour = Tours::find($tourId);
        return $tour->price * $quantity;
    }
    public function success()
    {
        return view('order.success'); // Ensure you have success.blade.php view
    }
}

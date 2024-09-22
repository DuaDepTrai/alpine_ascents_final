<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\orders_tours;
use App\Models\tours;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    

    // Display the order form with a list of tours
    public function create()
    {
        $tours = Tours::all();
        return view('order.create', compact('tours'));
    }

    // Save order information
    public function store(Request $request)
    {
        // Check if the user is not logged in


        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15', // phone is required
            'email' => 'nullable|email|max:255', // email is optional
            'quantity' => 'required|integer|min:1',
            'tour_id' => 'required|exists:tours,id',
        ]);

        // Get user_id if the user is logged in, otherwise set to null
            $userId = Auth::check() ? Auth::user()->id : null;
        
        // Create the order
        $order = orders_tours::create([
            'user_id' =>  $userId,
            'tour_id' => $request->tour_id,
            'name' => $request->name,
            'quantity' => $request->quantity,
            'total' => $this->calculateTotal($request->tour_id, $request->quantity),
            'email' => $request->email, // email is optional
            'phone' => $request->phone, // phone is required
            'note' => $request->note,
        ]);

        return redirect()->back()->with('success', 'Order successfully placed by: '.$request->name);
    }
    // Function to calculate total amount
    protected function calculateTotal($tourId, $quantity)
    {
        $tour = tours::find($tourId);
        return $tour->price * $quantity;
    }
    

}



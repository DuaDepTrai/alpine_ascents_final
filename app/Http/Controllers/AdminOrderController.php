<?php
namespace App\Http\Controllers;

use App\Models\orders_tours;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    /**
     * Display a listing of the orders.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $orders = orders_tours::all();
        return view('admin.Order.index', compact('orders'));
    }
}

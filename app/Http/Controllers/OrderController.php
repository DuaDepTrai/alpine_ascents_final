<?php

namespace App\Http\Controllers;

use App\Models\orders_tours;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the orders.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $orders = orders_tours::all();
        return view('Order.index', compact('orders'));
    }
}
                                                                                                                               
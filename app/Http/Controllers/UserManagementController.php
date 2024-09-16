<?php

namespace App\Http\Controllers;

use App\Models\orders_tours;
use Illuminate\Http\Request;

class UserManagementController extends Controller
{
    public function index()
    {
        $order = orders_tours::all();
        return view('UserManagement.index', compact('order'));

    }
}

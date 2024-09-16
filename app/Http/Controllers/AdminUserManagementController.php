<?php

namespace App\Http\Controllers;

use App\Models\orders_tours;
use Illuminate\Http\Request;

class AdminUserManagementController extends Controller
{
    public function index()
    {
        $order = orders_tours::all();
        return view('admin.UserManagement.index', compact('order'));

    }
}

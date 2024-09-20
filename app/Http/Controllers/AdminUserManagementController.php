<?php

namespace App\Http\Controllers;

use App\Models\orders_tours;
use App\Models\users;
use Illuminate\Http\Request;

class AdminUserManagementController extends Controller
{
    public function index()
    {
        $order = users::all();
        return view('admin.UserManagement.index', compact('order'));

    }
}

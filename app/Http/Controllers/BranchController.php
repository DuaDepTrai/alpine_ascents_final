<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\branches;

class BranchController extends Controller
{
    public function index()
    {
        $branches = branches::all();
        return view('branches.index', compact('branches'));
    }

    public function show()
    {
        return view('branches.index', compact('branches'));
    }
}

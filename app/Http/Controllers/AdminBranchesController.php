<?php

namespace App\Http\Controllers;
use App\Models\branches;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminBranchesController extends Controller
{
    //Display the list of users
    public function index()
    {
        $branches = branches::all();  // "Retrieve all users
        return view('admin.branches.index', compact('branches'));  // Return view displaying the list
    }
    
    // Display the form to add a new user
    public function create()
    {
        return view('admin.branches.create');
    }

    // Handle adding a new user
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'positioning' => 'required|string|max:255',
        ]);

        // Create new user
        branches::create([
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'positioning' => $request->positioning,
        ]);

        return redirect()->route('admin.branches.index')->with('success', 'New branch was added successfully!');
    }

    //Display user edit form
    public function edit($id)
    {
        $branch = branches::findOrFail($id);
        return view('admin.branches.edit', compact('branch'));
    }

    // Xử lý cập nhật người dùng
    public function update(Request $request, $id)
    {
        $branch = branches::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'positioning' => 'required|string|max:255',
]);

        // Update user information
        $branch->update([
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'positioning' => $request->positioning,
        ]);

        return redirect()->route('admin.branches.index')->with('success', 'Branch was updated successfully!');
    }

    // Handle user deletion
    public function destroy($id)
    {
        $branch = branches::findOrFail($id);
        $branch->delete();

        return redirect()->route('admin.branches.index')->with('success', 'Branch was deleted successfully!');
    }
}

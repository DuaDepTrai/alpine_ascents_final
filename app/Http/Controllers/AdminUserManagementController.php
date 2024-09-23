<?php

namespace App\Http\Controllers;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminUserManagementController extends Controller
{
    // Display the list of users
    public function index()
    {
        $users = users::all();  // Retrieve all users
        return view('admin.UserManagement.index', compact('users'));  // Return view to display the list
    }
    
    // Display the form to add a new user
    public function create()
    {
        return view('admin.UserManagement.create');
    }

    // Handle adding a new user
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'phone' => 'nullable|string|max:255',
            'avatar' => 'nullable|string',
            'role' => 'required|integer',
        ]);

        // Create a new user
        users::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'avatar' => $request->avatar,
            'role' => $request->role,
        ]);

        return redirect()->route('admin.UserManagement.index')->with('success', 'User added successfully!');
    }

    // Display the form to edit a user
    public function edit($id)
    {
        $user = users::findOrFail($id);
        return view('admin.UserManagement.edit', compact('user'));
    }

    // Handle updating a user
    public function update(Request $request, $id)
    {
        $user = users::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'phone' => 'nullable|string|max:255',
            'avatar' => 'nullable|string',
            'role' => 'required|integer',
        ]);

        // Update user information
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'avatar' => $request->avatar,
            'role' => $request->role,
        ]);

        return redirect()->route('admin.UserManagement.index')->with('success', 'User information has been updated!!');
    }

    // Handle deleting a user
    public function destroy($id)
    {
        $user = users::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.UserManagement.index')->with('success', 'User has been successfully deleted!');
    }
}

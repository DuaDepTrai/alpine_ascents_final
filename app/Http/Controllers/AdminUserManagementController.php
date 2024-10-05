<?php

namespace App\Http\Controllers;
use App\Models\users;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminUserManagementController extends Controller
{
    // Display the list of users
    public function index(Request $request)
    {   
        // Tạo query để có thể áp dụng các điều kiện tìm kiếm và sắp xếp
    $query = users::query();

    // Kiểm tra và áp dụng tìm kiếm theo tên
    if ($request->has('name') && $request->name != '') {
        $query->where('name', 'LIKE', '%' . $request->name . '%');
    }
    // Kiểm tra và áp dụng tìm kiếm theo số điện thoại
    if ($request->has('phone') && $request->phone != '') {
        $query->where('phone', 'LIKE', '%' . $request->phone . '%');
    }
    // Kiểm tra và áp dụng tìm kiếm theo email
    if ($request->has('email') && $request->email != '') {
        $query->where('email', 'LIKE', '%' . $request->email . '%');
    }

    // Sắp xếp theo cột 'created_at' từ mới đến cũ
    $query->orderBy('created_at', 'desc');

        // Phân trang 15 user mỗi trang
        $users = $query->paginate(15);  

        return view('admin.UserManagement.index', compact('users'));   
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
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
            'phone' => 'required|string|regex:/^[0-9]{9,11}$/|unique:users,phone',
            'avatar' => 'nullable|string',
            'role' => 'required|boolean',
            'status' => 'required|boolean',
        ], [
            'name.required' => 'Please enter your name',
            'email.required' => 'Please enter your email address',
            'email.email' => 'Please enter a valid email address',
            'email.unique' => 'Email address already exists',
            'password.required' => 'Please enter your password',
            'password.min' => 'Password must be at least 6 characters long',
            'phone.required' => 'Please enter your phone number',
            'phone.regex' => 'Please enter a valid phone number',
            'phone.unique' => 'Phone number already exists',
        ]);

        // Create a new user
        users::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'avatar' => $request->avatar,
            'role' => $request->role,
            'status' => $request->status,
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
            'phone' => 'required|string|max:11|regex:/^0[0-9]{9}$/|unique:users,phone,' . $id,
            'avatar' => 'nullable|string',
            'role' => 'required|boolean',
            'status' => 'required|boolean',
        ], [
            'name.required' => 'Please enter your name',
            'email.required' => 'Please enter your email address',
            'email.email' => 'Please enter a valid email address',
            'email.unique' => 'Email address already exists',
            'phone.required' => 'Please enter your phone number',
            'phone.regex' => 'Please enter a valid phone number',
            'phone.unique' => 'Phone number already exists',
        ]);

        // Update user information
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'avatar' => $request->avatar,
            'role' => $request->role,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.UserManagement.index')->with('success', 'User information has been updated!!');
    }

    // Handle deleting a user
    public function destroy($id)
    {
        $user = users::find($id);
        
        if ($user) {
            $user->delete();
            return response()->json(['success' => true]);
        }
        
        return response()->json(['success' => false], 404);
    }
}

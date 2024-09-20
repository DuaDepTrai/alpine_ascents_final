<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminUserManagementController extends Controller
{
    // Hiển thị danh sách người dùng
    public function index()
    {
        $users = users::all();  // Lấy toàn bộ người dùng
        return view('admin.UserManagement.index', compact('users'));  // Trả về view hiển thị danh sách
    }

    // Hiển thị form thêm mới người dùng
    public function create()
    {
        return view('admin.users.create');
    }

    // Xử lý thêm mới người dùng
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

        // Tạo người dùng mới
        users::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'avatar' => $request->avatar,
            'role' => $request->role,
        ]);

        return redirect()->route('admin.UserManagement.index')->with('success', 'Người dùng đã được thêm thành công!');
    }

    // Hiển thị form chỉnh sửa người dùng
    public function edit($id)
    {
        $user = users::findOrFail($id);
        return view('admin.UserManagement.edit', compact('user'));
    }

    // Xử lý cập nhật người dùng
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

        // Cập nhật thông tin người dùng
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'avatar' => $request->avatar,
            'role' => $request->role,
        ]);

        return redirect()->route('admin.UserManagement.index')->with('success', 'Thông tin người dùng đã được cập nhật!');
    }

    // Xử lý xóa người dùng
    public function destroy($id)
    {
        $user = users::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.UserManagement.index')->with('success', 'Người dùng đã được xóa thành công!');
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\branches;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminBranchesController extends Controller
{
    // Hiển thị danh sách người dùng
    public function index()
    {
        $branches = branches::all();  // Lấy toàn bộ người dùng
        return view('admin.branches.index', compact('branches'));  // Trả về view hiển thị danh sách
    }
    
    // Hiển thị form thêm mới người dùng
    public function create()
    {
        return view('admin.branches.create');
    }

    // Xử lý thêm mới người dùng
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'positioning' => 'required|string|max:255',
        ]);

        // Tạo người dùng mới
        branches::create([
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'positioning' => $request->positioning,
        ]);

        return redirect()->route('admin.branches.index')->with('success', 'New branch was added successfully!');
    }

    // Hiển thị form chỉnh sửa người dùng
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
            'phone' => 'required|string|max:255',
            'positioning' => 'required|string|max:255',
        ]);

        // Cập nhật thông tin người dùng
        $branch->update([
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'positioning' => $request->positioning,
        ]);

        return redirect()->route('admin.branches.index')->with('success', 'Branch was updated successfully!');
    }

    // Xử lý xóa người dùng
    public function destroy($id)
    {
        $branch = branches::findOrFail($id);
        $branch->delete();

        return redirect()->route('admin.branches.index')->with('success', 'Branch was deleted successfully!');
    }
}

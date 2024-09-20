<?php

// app/Http/Controllers/VerificationController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\users;

class VerificationController extends Controller
{
    public function showForm()
    {
        return view('verification.form');
    }

    public function verify(Request $request)
    {
        $request->validate(['code' => 'required|string']);

        // Kiểm tra mã xác nhận
        $user = users::where('verification_code', $request->code)->first();

        if ($user) {
            // Xác minh thành công
            $user->verification_code = null; // Xóa mã xác nhận
            $user->save();

            // Đăng nhập người dùng

            return redirect()->route('login')->with('success', 'Tài khoản của bạn đã được xác nhận.');
        }

        return back()->withErrors(['code' => 'Mã xác nhận không chính xác.']);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Kiểm tra xem người dùng đã đăng nhập chưa
        if (!Auth::check()) {
            return redirect('/login');
        }

        // Kiểm tra xem người dùng có phải là admin không
        if (!Auth::user()->is_admin) {
            return redirect('/dashboard');
        }

        // Nếu là admin, người dùng có thể truy cập các trang quản trị
        if ($request->is('admin/*')) {
            // Quản trị viên có thể tạo, sửa, xóa các nhà hàng và món ăn
            if ($request->is('admin/restaurants*') || $request->is('admin/dishes*')) {
                return $next($request);
            }

            // Quản trị viên có thể tạo yêu cầu ăn trưa và xem danh sách các yêu cầu
            if ($request->is('admin/lunch-requests*')) {
                return $next($request);
            }
        }

        // Nếu không phải là trang quản trị, chuyển hướng về trang dashboard
        return redirect('/dashboard');
    }
}

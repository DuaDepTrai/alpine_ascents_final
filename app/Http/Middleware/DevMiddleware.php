<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DevMiddleware
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

        // Kiểm tra xem người dùng có phải là thành viên của team dev không
        if (!Auth::user()->is_dev_team) {
            return redirect('/dashboard');
        }

        // Nếu là thành viên team dev, người dùng có thể truy cập các trang liên quan
        if ($request->is('dev/*')) {
            // Thành viên team dev có thể xem danh sách các yêu cầu ăn trưa và chọn các món ăn
            if ($request->is('dev/lunch-requests*')) {
                return $next($request);
            }
        }

        // Nếu không phải là trang của team dev, chuyển hướng về trang dashboard
        return redirect('/dashboard');
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
//     /**
//      * Handle an incoming request.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  \Closure  $next
//      * @param  string  $role
//      * @return mixed
//      */
//     public function handle(Request $request, Closure $next, $role)
// {
//     if (!Auth::check()) {
//         return redirect('/login')->with('error', 'Bạn cần đăng nhập để thực hiện tác vụ này');
//     }

//     if (Auth::user()->role === 1 && $role === 'admin') {
//         return $next($request);
//     }

//     if (Auth::user()->role === 0 && $role === 'user') {
//         return $next($request);
//     }

//     return redirect('/')->with('error', 'Bạn không đủ quyền để thực hiện tác vụ này');
// }
}

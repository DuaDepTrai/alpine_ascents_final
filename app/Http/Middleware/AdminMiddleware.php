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
        // Check if the user is logged in
        if (!Auth::check()) {
            return redirect('/login');
        }

        // Check if the user is an admin
        if (!Auth::user()->is_admin) {
            return redirect('/dashboard');
        }

        // If admin, allow access to admin pages
        if ($request->is('admin/*')) {
            // Admin can create, edit, delete restaurants and dishes
            if ($request->is('admin/restaurants*') || $request->is('admin/dishes*')) {
                return $next($request);
            }

            // Admin can create lunch requests and view the list of requests
            if ($request->is('admin/lunch-requests*')) {
                return $next($request);
            }
        }

        // If not an admin page, redirect to the dashboard
        return redirect('/dashboard');
    }
}

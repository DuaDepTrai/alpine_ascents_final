<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DevMiddleware
{
    // /**
    //  * Handle an incoming request.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
    //  * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
    //  */
    // public function handle(Request $request, Closure $next)
    // {
    //     // Check if the user is logged in
    //     if (!Auth::check()) {
    //         return redirect('/login');
    //     }

    //     // Check if the user is a member of the dev team
    //     if (!Auth::user()->is_dev_team) {
    //         return redirect('/dashboard');
    //     }

    //     // If a member of the dev team, allow access to relevant pages
    //     if ($request->is('dev/*')) {
    //         // Dev team members can view lunch requests and select meals
    //         if ($request->is('dev/lunch-requests*')) {
    //             return $next($request);
    //         }
    //     }

    //     // If not a dev team page, redirect to the dashboard
    //     return redirect('/dashboard');
    // }
}

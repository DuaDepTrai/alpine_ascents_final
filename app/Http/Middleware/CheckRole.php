<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CheckRole extends Middleware
{
    // public function handle(Request $request, Closure $next)
    // {
    //     if(Auth::check()){
    //         if(Auth::user()->role == 1){
    //             return redirect()->route('admin.UserManagement.index');
    //         }
    //     }

    //     return redirect()->route('home.index')->with('error', 'You do not have permission to access this page.');
    // }
}
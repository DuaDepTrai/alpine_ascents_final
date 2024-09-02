<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function aboutUs()
    {
        return view('about-us.index');
    }

    public function blogs1()
    {
        return view('blogs-1.index');
    }
}

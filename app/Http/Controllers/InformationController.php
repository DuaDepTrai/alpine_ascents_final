<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function infor(){
        return view('information.tabs');
    }
}

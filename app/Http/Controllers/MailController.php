<?php

namespace App\Http\Controllers;

use App\Mail\mymail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(Request $request){
        $email = $request->input('email');
        Mail::to($email)->send(new mymail($email));

        return redirect()->route('verification.form');
    }
}

<?php

// app/Http/Controllers/VerificationController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\users;
use Illuminate\Support\Facades\Mail;


class VerificationController extends Controller
{
    public function showForm()
    {
        return view('verification.form');
    }

    public function showForgetPassForm(){
        return view('auth.forgetpass');
    }

    public function sendVerificationCode(Request $request){
        $request->validate(['email' => 'required|string']);

        $user = users::where('email',$request->email)->first();
        
        if ($user) {
            $code = rand(100000, 999999); // Tạo mã 6 số
            // Lưu mã vào cơ sở dữ liệu hoặc session
            session(['verification_code' => $code]);

            // Gửi mã qua email
            $data['email'] = $user->email;
            $data['title'] = 'Mail Verification';

            $data['body'] = 'Your OTP is:- '.$code;

            Mail::send('emails.verification',['data'=>$data],function($message) use ($data){
                $message->to($data['email'])->subject($data['title']);
            });

            return redirect()->route('verification.form');
        }

        return back()->withErrors(['email' => 'Email không tồn tại.']);
    }

    public function verify(Request $request)
    {
        $request->validate(['code' => 'required|string']);

        // Kiểm tra mã xác nhận

        return back()->withErrors(['code' => 'Mã xác nhận không chính xác.']);
    }
}

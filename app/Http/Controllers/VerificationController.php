<?php

// app/Http/Controllers/VerificationController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class VerificationController extends Controller
{
    public function showForm()
    {
        return view('verification.form');
    }

    public function showChangeForm(){
        return view('verification.formChange');
    }

    public function showRegisterVerifyForm(){
        return view('verification.registerVerify');
    }

    public function showLoginForgetForm(){
        return view('verification.loginforget');
    }

    public function updateForgetPassword(Request $request){
        $request->validate([
            'password' => 'regex:/^[^\s]{6,15}$/', 
        ]);

        $user = Auth::user();
        $user = users::where('id',$user->id)->first();
        
        $password = htmlspecialchars($request->password, ENT_QUOTES, 'UTF-8');
        $password_confirm = htmlspecialchars($request->password_confirm, ENT_QUOTES, 'UTF-8');

        if($user){
            if($password == $password_confirm){
                $user->update([
                    'password' => Hash::make($password),
                ]);

                Auth::logout(); 
                session()->invalidate();
                session()->regenerateToken();

                return redirect()->route('login')->with('success','Password changed. Please log in again.');    
            }
            else{
                return back()->withErrors(['failed','Password does not match !']);
            }     
        }
        else{
            return back()->withErrors(['failed','Undefined Error. sorry hehe']);
        }        
    }

    public function updateLoginForget(Request $request){
        $request->validate([
            'password' => 'regex:/^[^\s]{6,15}$/', 
        ]);

        $password = htmlspecialchars($request->password, ENT_QUOTES, 'UTF-8');
        $password_confirm = htmlspecialchars($request->password_confirm, ENT_QUOTES, 'UTF-8');

        if($password == $password_confirm){
            $user = users::where('email',session('email'))->first();
            $user->password = Hash::make($password);
            $user->save();

            session()->invalidate();
            session()->regenerateToken();

            return redirect()->route('login')->with('success','Password changed. Please log in again.');    
        }
        else{
            return back()->withErrors(['failed','Password does not match !']);
        }     
    }

    public function updatePassword(Request $request){
        $request->validate([
            'old_password' => 'regex:/^[^\s]{6,15}$/', 
            'new_password' => 'regex:/^[^\s]{6,15}$/', 
        ]);

        $new_password = htmlspecialchars($request->new_password, ENT_QUOTES, 'UTF-8');
        $old_password = htmlspecialchars($request->old_password, ENT_QUOTES, 'UTF-8');

        $user = Auth::user();

        if (!empty($user)) {
            if(Hash::check($old_password,$user->password)){
                $user->update([
                    'password' => Hash::make($new_password),

                ]);

                Auth::logout(); 
                session()->invalidate();
                session()->regenerateToken();
                return redirect()->route('login')->with('success','Password changed. Please log in again.');    
            }
            else{
                return back()->withErrors(['error','The new password must not be the same as the old password !']);
            }  
        }
        else{
            return redirect()->route('home');
        }       
    }

    public function verifyLoginForget(Request $request){
        $request->validate(['icode' => 'required|numeric']);
        $mcode = session('mcode');
        $icode = intval($request->input('icode'));
        if ($icode == $mcode) {
            return redirect()->route('loginnewpass.form');
            session()->forget('mcode');
        }

        return back()->withErrors(['code' => 'The code you entered is incorrect. Please try again.']);
    }

    public function registerVerify(Request $request){
        $request->validate(['icode' => 'required|numeric']);
        $mcode = session('mcode');
        $icode = intval($request->input('icode'));
        if ($icode == $mcode) {            
            $user = new User();
            $user->name = session('name');
            $user->email = session('email');
            $user->phone = session('phone');
            $user->password = Hash::make(session('password'));  // Lưu mật khẩu đã mã hóa
            $user->save();
            
            Auth::logout(); 
            session()->invalidate();
            session()->regenerateToken();

            return redirect()->route('login')->with('message','Register succesfully. Please log in !');    
        }
        return back()->withErrors(['code' => 'The code you entered is incorrect. Please try again.']);
    }

    public function changeVerify(Request $request)
    {
        $request->validate(['icode' => 'required|numeric']);
        $mcode = session('mcode');
        $icode = intval($request->input('icode'));
        
        if ($icode == $mcode) {
            $user = Auth::user();
            $user->update([
                'email' => session('email'),
                'phone' => session('phone'),
            ]);

            Auth::logout(); 
            session()->invalidate();
            session()->regenerateToken();

            return redirect()->route('users.index',['user'=>$user]);  
        }

        return back()->withErrors(['error' => 'The code you entered is incorrect. Please try again.']);
    }

    public function verify(Request $request)
    {
        $request->validate(['icode' => 'required|numeric']);
        $mcode = session('mcode');
        $icode = intval($request->input('icode'));
        if ($icode == $mcode) {
            return redirect()->route('newpass.form');
            session()->forget('mcode');
        }

        return back()->withErrors(['code' => 'The code you entered is incorrect. Please try again.']);
    }


    // public function sendVerificationCode(Request $request){
    //     $request->validate(['email' => 'required|string']);
    //     $user = users::where('email',$request->email)->first();
        
    //     if ($user) {
    //         $code = rand(100000, 999999); // Tạo mã 6 số
    //         // Lưu mã vào cơ sở dữ liệu hoặc session
    //         session(['code' => $code]);

    //         // Gửi mã qua email
    //         $data['email'] = $user->email;
    //         $data['title'] = 'Mail Verification';

    //         $data['body'] = 'Your OTP is:- '.$code;
    //         Mail::send('emails.verification',['data'=>$data],function($message) use ($data){
    //             $message->to($data['email'])->subject($data['title']);
    //         });
    //         return redirect()->route('verification.form');
    //     }

    //     return back()->withErrors(['email' => 'Email không tồn tại.']);
    // }

}
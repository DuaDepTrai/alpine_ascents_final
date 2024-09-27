<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;
use App\Mail\mymail;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    public function index(users $user)
    {
        if(!Auth::check()){
            return redirect()->route('home');
        }
        else{
            return view('users.index',['user'=>$user]);
        }
    }

    public function personalInfo(){
        $user = Auth::user();
        return view('users.index',['user'=> $user]);
    }

    public function settings(){
        $user = Auth::user();
        return view('users.edit',['user'=> $user]);
    }
    
    public function showNewPassForm(){
        return view('users.newpass');
    }

    public function showChangePassForm(){
        return view('users.changepass');
    }

    public function showForgetPassForm(){
        return view('users.forgetpass');    
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }
    
    public function showLoginForgetForm(){
        return view('users.loginforget');
    }
    
    public function register(Request $request) {
        $request->validate([
            'name' => 'required|max: 255',
            'phone' => 'required|string|max:11',
            'email' => 'required|email',
            'password' => 'required|min:6|max:15',
        ]);

        $email_check = users::where('email',$request->email)->first();
        $phone_check = users::where('phone',$request->phone)->first();

        $password = $request->password;
        $password_confirm = $request->password_confirm;

        if($email_check || $phone_check){
            return back()->withErrors(['error' => 'Email / phone number already exist !']);
        }
        else if($password !== $password_confirm) {
            return back()->withErrors(['error' => 'Password does not match !']);
        }
        else{
            session(['name'=> $request->name]);
            session(['phone'=> $request->phone]);
            session(['email'=> $request->email]);
            session(['password'=> $request->password]);
        
            $email = $request->email;
            Mail::to($email)->send(new mymail($email));

            return redirect()->route('register.verify.form');
        }
    }

    public function showLoginForm()
        {
            return view('auth.login');
        }

        
    //     public function login(Request $request)
    // {
    //     // Xác thực đầu vào
    //     $request->validate([
    //         'email' => 'required|email',
    //         'password' => 'required|min:6|max:15',
    //     ]);
    
    //     // Kiểm tra xem người dùng có tồn tại không
    //     $user = users::where('email', $request->email)->first();
    
    //     // Nếu người dùng không tồn tại, trả về lỗi
    //     if (!$user) {
    //         return back()->withErrors(['error' => 'The provided credentials do not match our records.']);
    //     }
    
    //     // Kiểm tra đăng nhập
    //     if (Auth::attempt($request->only('email', 'password'))) {
    //         // Lưu email vào session
    //         session(['true_email' => $user->email]);
    
    //         // Kiểm tra role và chuyển hướng dựa trên role
    //         if ($user->role === 1) {
    //             return redirect()->route('UserManagement.index');
    //         } elseif ($user->role === 0) {
    //             return redirect()->route('home.index');
    //         }
    //     }
    
    //     // Nếu đăng nhập không thành công
    //     return redirect()->back()->withErrors(['email' => 'The provided credentials do not match our records.']);
    // }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|max:15',
        ]);

        $user = users::where('email', $request->email)->first();
        
        if($user){
            if(Hash::check($request->password, $user->password)){
                Auth::login($user);     
                if($user->role == 1){
                    return redirect()->route('admin.galleries.index');
                }
                else{
                    session(['true_email' => $user->email]);
                    session(['id'=> $user->id]);
                    
                    return redirect()->route('home');
                }
            }
            else{
                return back()->withErrors(['email' => 'Email hoặc mật khẩu không chính xác, hoặc tài khoản chưa được xác nhận.']);
            }
        }
        else{
            return back()->withErrors(['email' => 'Email hoặc mật khẩu không chính xác, hoặc tài khoản chưa được xác nhận.']);
        }
    }

    public function logout(){
        Auth::logout(); 
        session()->invalidate();
        session()->regenerateToken();
        return redirect()->route('home');
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        users::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'day_can_rest' => 12,
            'role' => 'employee', // or set based on your logic
        ]);

        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    public function show(users $user)
    {
        return view('users.show', compact('user'));
    }

    public function edit(users $user)
    {
        if(!Auth::check()){
            return redirect()->route('home');
        }
        else{
            return view('users.edit', compact('user'));
        }
    }

    public function update(Request $request, users $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'phone' => 'required|string|max:11',
        ]);

        if(($request->email == $user->email || $request->email == '') && ($request->phone == $user->phone || $request->phone == '')){
            $user->update([
                'name' => $request->name
            ]);
        }
        else{
            $email_check = users::find($request->email);
            $phone_check = users::find($request->phone);
            if($email_check || $phone_check){
                return back()->withErrors(['message' => 'Email already exist !']);
            }
            else{
                $user->update([
                    'name' => $request->name
                ]);
    
                session(['phone'=> $request->phone]);
                session(['email'=> $request->email]);
    
                $email = $request->email;
                Mail::to($email)->send(new mymail($email));
                return redirect()->route('verificationchange.form');         
            }   
        }

        $user->update($request->only('name', 'email','phone'));

        return redirect()->route('users.index',['user'=>$user])->with('success', 'User updated successfully.');
    }

    public function destroy(users $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}

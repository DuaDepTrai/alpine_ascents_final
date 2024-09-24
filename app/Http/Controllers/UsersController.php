<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;
use App\Mail\mymail;
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

    public function register(Request $request)
{
    $request->validate([
        'name' => 'required|max: 255',
        'phone' => 'required|string|regex:/^(0|\+84)[0-9]{9}$/',
        'email' => 'required|email',
        'password' => 'required|min:6|max:15',
    ]);

    $email_check = users::where('email',$request->email)->first();
    $phone_check = users::where('phone',$request->phone)->first();

    $password = $request->password;
    $password_confirm = $request->password_confirm;

    session(['name'=> $request->name]);
    session(['phone'=> $request->phone]);
    session(['email'=> $request->email]);
    session(['password'=> $request->password]);

    if($email_check || $phone_check || ($password !== $password_confirm)){
        return back()->withErrors(['message' => 'Email / phone number already exist !']);
    }
    else{
        $email = $request->email;
        Mail::to($email)->send(new mymail($email));

        return redirect()->route('register.verify.form');
    }
}

public function showLoginForm()
    {
        return view('auth.login');
    }

public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:6|max:15',
    ]);

    $user = users::where('email', $request->email)->first();
    
    session(['true_email' => $user->email]);

    if($user){
        if(Hash::check($request->password, $user->password)){
            Auth::login($user);       
            session(['id'=> $user->id]);
            return redirect()->route('home');
        }
        else{
            return back()->withErrors(['email' => 'Email hoặc mật khẩu không chính xác, hoặc tài khoản chưa được xác nhận.']);
        }
    }
    else{
        return back()->withErrors(['email' => 'Email hoặc mật khẩu không chính xác, hoặc tài khoản chưa được xác nhận.']);
    }
    
    // if ($user && !$user->verification_code) {
    //     // Đăng nhập thành công
    //     if (Auth::attempt($request->only('email', 'password'))) {
    //         return redirect()->route('home')->with('success', 'Đăng nhập thành công.');
    //     }
    // }

    // return back()->withErrors(['email' => 'Email hoặc mật khẩu không chính xác, hoặc tài khoản chưa được xác nhận.']);
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
            'phone' => 'required|string|regex:/^(0|\+84)[0-9]{9}$/',
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

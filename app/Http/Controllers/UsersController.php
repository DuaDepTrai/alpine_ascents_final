<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UsersController extends Controller
{
    public function index()
    {
        $users = users::all();
        return view('users.index', compact('users'));
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
{
    $otp = rand(100000, 999999);

    $user = users::create([
        'name' => $request->name,
        'phone' => $request->phone,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'role' => 1,
        'verification_code' => $otp,
    ]);

    $data['email'] = $user->email;
        $data['title'] = 'Mail Verification';

        $data['body'] = 'Your OTP is:- '.$otp;

        Mail::send('emails.verification',['data'=>$data],function($message) use ($data){
            $message->to($data['email'])->subject($data['title']);
        });

    return redirect('verification.form')->with('success', 'Registration successful! Please log in.');
}

public function showLoginForm()
    {
        return view('auth.login');
    }
public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $user = users::where('email', $request->email)->first();

    if ($user && !$user->verification_code) {
        // Đăng nhập thành công
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('home')->with('success', 'Đăng nhập thành công.');
        }
    }

    return back()->withErrors(['email' => 'Email hoặc mật khẩu không chính xác, hoặc tài khoản chưa được xác nhận.']);
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
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, users $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
        ]);

        $user->update($request->only('name', 'email'));

        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

    public function destroy(users $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}

<?php

// app/Http/Controllers/VerificationController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\users;

class VerificationController extends Controller
{
    public function showForm()
    {
        return view('verification.form');
    }

    public function verify(Request $request)
    {
        $request->validate(['code' => 'required|string']);

        // Check verification code
        $user = users::where('verification_code', $request->code)->first();

        if ($user) {
            // Verification successful
            $user->verification_code = null; // Clear verification code
            $user->save();

            // Log in the user

            return redirect()->route('login')->with('success', 'Your account has been verified.');
        }

        return back()->withErrors(['code' => 'The verification code is incorrect.']);
    }
}

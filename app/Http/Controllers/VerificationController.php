<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerificationController extends Controller
{
    public function showVerificationForm()
    {
        return view('frontend.verify');
    }

    public function verify(Request $request)
    {
        $verificationCode = $request->input('verification_code');
        $userId = $request->session()->get('ids');
        $verCode = $request->session()->get('verification_code');
       

        if ($verCode == $verificationCode) {
            // Verification successful, log in the user
            Auth::loginUsingId($userId);
            $request->session()->put('id', $userId);
            // Clear verification code from user and session
          
            $request->session()->forget('verification_code');

            return redirect('landing')->with('success', 'Login Success');
        } else {
            return redirect()->route('verify')->with('error', 'Invalid verification code.');
        }
    }
}

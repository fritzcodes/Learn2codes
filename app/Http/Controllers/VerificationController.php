<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\LoggedIn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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
            User::where('id', $userId)->update(['last_online_at' => now()]);
            LoggedIn::create(['user_id' => $userId]);
            $request->session()->put('id', $userId);
            // Clear verification code from user and session
          
            $request->session()->forget('verification_code');
            $request->session()->forget('ids');

            return redirect('landing')->with('success', 'Login Success');
        } else {
            return redirect()->route('verify')->with('error', 'Invalid verification code.');
        }
    }
}

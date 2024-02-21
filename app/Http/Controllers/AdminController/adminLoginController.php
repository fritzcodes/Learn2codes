<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\RessetPassword;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Mail;
use Socialite;
use Exception;
use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Support\Facades\Validator;

class adminLoginController extends Controller
{
    public function Index(): View
    {
        return view('frontend.admin.adminLogin');
    }

    public function adminLoginPost(Request $request)
    {
        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credetials)) {
            $userId = Auth::id();
            $request->session()->put('id', $userId);

            return redirect()->route('Dashboard')->with('success', 'Login Success');
        } else {
            
            return redirect()->route('AdminLogin')->with ("error", "Wrong Email or Passwordsss.");
        }
    }

    public function logout()
    {
        Auth::logout();
        session()->forget('id');

        return redirect()->route('AdminLogin');
    }
}
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

    public function createAdmin(): View
    {
        return view('frontend.admin.createAccount');
    }

    public function adminLoginPost(Request $request)
    {
        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::guard('admin')->attempt($credetials)) {
            $userId = Auth::guard('admin')->id();
            return redirect()->route('Dashboard')->with('success', 'Login Success');
        } else {

            return redirect()->route('AdminLogin')->with("error", "Wrong Email or Passwords.");
        }
    }

    public function createAccountPost(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email',
            'username' => 'required|unique:users,username',
            'password' => 'required|min:8|confirmed',
        ]);
        
        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('username') && $errors->has('email')) {
                return back()->with('error', 'Username and email already exists');
            }
            if ($errors->has('email')) {
                return back()->with('error', 'Email already exists');
            }
            if ($errors->has('username')) {
                return back()->with('error', 'Username already exists');
            }
            
            
        }
        
        
        // If there are other validation failures, you can handle them here
        
        // If validation succeeds, continue with your logic
        
        $user = new Admin();

        $user->email = $request->email;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);

        $user->save();

        return redirect()->to(route('createAccount'))->with("success","Created Admin account successfully");
    }

    public function logout()
    {
        Auth::logout();
        session()->forget('id');

        return redirect()->route('AdminLogin');
    }
}

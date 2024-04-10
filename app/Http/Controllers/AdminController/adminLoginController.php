<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateAccountRequest;
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

    public function createAccountPost(CreateAccountRequest $request)
    {

        $data = $request->validated();

        // Hash the password
        $data['password'] = Hash::make($request->password);

        // Create a new Admin instance and fill it with the validated data
        $admin = new Admin();
        $admin->fill($data);

        // Save the admin to the database
        $admin->save();


        // Redirect back with success message
        return redirect()->route('createAccount')->with("success", "Created Admin account successfully");
    }


    public function logout()
    {
        Auth::logout();
        session()->forget('id');

        return redirect()->route('AdminLogin');
    }
}

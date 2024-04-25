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
        return redirect()->back()->with('success', 'Created Admin account successfully.');
    }


    public function logout()
    {
        Auth::logout();
        session()->forget('id');

        return redirect()->route('AdminLogin');
    }

    public function updateAdminProfile(Request $request)
{
    // Validate the incoming request data
    $validatedData = $request->validate([
        'username' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'profile_photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust max file size and allowed extensions as needed
    ]);

    try {
        // Retrieve the input values from the request
        $adminId = Auth::guard('admin')->id();
        $username = $validatedData['username'];
        $email = $validatedData['email'];

        // Find the admin record in the database
        $admin = Admin::find($adminId);

        // If admin record doesn't exist, handle the error gracefully
        if (!$admin) {
            return redirect()->back()->with('error', 'Admin not found.');
        }

        // Update the admin profile fields
        $admin->username = $username;
        $admin->email = $email;

        // Process profile photo upload
        if ($request->hasFile('profile_photo')) {
            $profilePhoto = $request->file('profile_photo');
            $profilePhotoName = time() . '_' . $profilePhoto->getClientOriginalName();
            $profilePhoto->move(public_path('images'), $profilePhotoName);
            // Update the admin record with the profile photo path or name
            $admin->profile_photo = $profilePhotoName;
        }

        // Save the changes to the database
        $admin->save();

        // Redirect to a different page or display a success message
        return redirect()->route('adminDashboard')->with('success', 'Admin profile updated successfully.');
    } catch (Exception $e) {
        // Log the error for further investigation
        \Log::error($e->getMessage());

        // Redirect back with an error message
        return redirect()->back()->with('error', 'An error occurred while updating admin profile.');
    }
}


}

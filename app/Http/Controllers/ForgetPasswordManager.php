<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Models\User;


class ForgetPasswordManager extends Controller
{
    function ForgetPassword(){
        return view('frontend.forget-password');
    }


    function ForgetPasswordPost(Request $request){
        $request->validate([
            'email'=> "required|email|exists:users",
        ]);
    
        $token = Str::random(60);
    
        $existingRecord = DB::table('password_resets')->where('email', $request->email)->first();
    
        if ($existingRecord) {
            DB::table('password_resets')->where('email', $request->email)->update([
                'token' => $token,
                'created_at' => Carbon::now()
            ]);
        } else {
            DB::table('password_resets')->insert([
                'email' => $request->email,
                'token' => $token,
                'created_at' => Carbon::now()
            ]);
        }
    
        Mail::send('emails.forget-password', ['token'=> $token], function ($message) use ($request){
    $message->to($request->email);
    $message->subject("Reset Password");
});

    
        return redirect()->to(route('forget.password'))->with("Success","We have sent an email to reset password.");
    }
    

    function resetPassword($token){

        return view('frontend.new-password', ['token' => $token]);

    }
    

    function resetPasswordPost(Request $request){
        $request->validate([
            "email"=>"required|email|:users",
            "password"=>"required|string|min:8|confirmed",
            "password_confirmation"=>"required"
        ]);

        $updatePassword = DB::table('password_resets')->where([
            "email" => $request->email,
            "token" => $request->token
        ])->first();

        if (!$updatePassword) {
            return redirect()->route('reset.password')->with("error", "Invalid email for password reset");
        }

        User::where("email",$request->email)->update(["password" => Hash::make($request->password)]);

        DB::table('password_resets')->where(["email" => $request->eamil])->delete();

        return redirect()->to(route('login'))->with("success","Password reset success");
    }
    
}

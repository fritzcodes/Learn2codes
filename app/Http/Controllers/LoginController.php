<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use App\Models\RessetPassword;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Mail;
use Validator;
use Socialite;
use Exception;
use PhpParser\Node\Stmt\TryCatch;

class LoginController extends Controller
{
    public function register()
    {
        return view('frontend.register');
    }

    public function registerPost(Request $request)
    {
        $user = new User();

        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->course = $request->course;
        $user->year = $request->year;
        $user->password = Hash::make($request->password);

        $user->save();

        return back()->with('success', 'Register successfully');
    }

    public function login()
    {
        return view('frontend.login');
    }


    public function loginPost(Request $request)
    {
        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credetials)) {
            $userId = Auth::id();
            $request->session()->put('id', $userId);

            return redirect('landing')->with('success', 'Login Success');
        } else {
            return back()->with('error', 'Wrong Email or Password');
        }
    }

    public function logout()
    {
        Auth::logout();
        session()->forget('id');

        return redirect('login');
    }

    

//forgetpassword
// public function RessetPassword(Request $request)
// {
//     try{

//         $user =user::where('email',$request->email)->get();

//         if(count($user) > 0){

//             $token = Str::random(40);
//             $domain = URL::to('/');
//             $url = $domain.'/Resset-Password?token'.$token;

//             $data['url'] = $url;
//             $data['email']= $request->email;
//             $data['title'] = "Password Resset";
//             $data['body'] = "Please click on below link to reset your password.";

//             Mail:: send('forgetPassword',['data'=>$data],function($message) use ($data){
//                 $message->to($data['email'])->subject($data['title']);
//             });

//             $datetime = Carbon::now()->format('Y-m-d H:i:s');
//             RessetPassword::updateOrCreate(
//                 ['email' => $request->email],
//                 [
//                     'email' => $request->email,
//                     'token' => $token,
//                     'created_at' => $datetime
//                 ]
//             );

//             return response()->json(['success'=>true,'msg'=>'Please check your email to reset your password.']);

//         }
//         else{
//             return response()->json(['success'=>false,'msg'=>'User not Found!']);
//         }


//     }catch(\Exception $e){
//         return response()->json(['success'=>false,'msg'=>$e->getMessage()]);
//     }
// }


}

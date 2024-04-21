<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use App\Models\RessetPassword;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Socialite;
use Exception;
use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Support\Facades\Validator;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;




class LoginController extends Controller
{
    public function register()
    {
        return view('frontend.register');
    }

    public function registerPost(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email',
            'username' => 'required|unique:users,username',
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'course' => 'required|string',
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

        $user = new User();

        $user->fname = $request->firstname;
        $user->lname = $request->lastname;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->course = $request->course;
        $user->year = $request->year;
        $user->password = Hash::make($request->password);

        $user->save();

        return redirect()->to(route('register'))->with("success", "Register successfully");
    }

    public function login()
    {
        return view('frontend.login');
    }


    public function loginPost(Request $request)
    {

        $email = $request->email;
        $password = $request->password;
        $user = User::where('email', $email)->first();

        if ($user) {

            if (Hash::check($password, $user->password)) {
                try {
                    $verificationCode = mt_rand(100000, 999999);
                    Mail::raw("Your verification code is: $verificationCode", function ($message) use ($user) {
                        $message->to($user->email)
                                ->subject('Verification Code');
                    });
                } catch (\Exception $e) {
                    return redirect()->route('login')->with('error', 'Failed to send verification email.');
                }
                $userId = $user->id;
                $request->session()->put('ids', $userId);

                
                session_start();
                $_SESSION["L2C_id"] = $userId;
                // Generate verification code
               

                // Store verification code in the database
                //$user->verification_code = $verificationCode;
                //$user->save();

                // Send verification code to user's email using SMTP

                // For demonstration, let's assume the verification code is sent to the email
                // You'll need to implement your SMTP email sending logic here

                // Temporarily store verification code in session
                $request->session()->put('verification_code', $verificationCode);
                $request->session()->put('email', $email);
                $request->session()->put('password', $password);

                return redirect()->route('verify')->with('info', 'Verification code has been sent to your email.');
            }
            else{
                return redirect()->route('login')->with('error', 'Wrong Email or Password.');
            }
        } else {
            return redirect()->route('login')->with('error', 'Wrong Email or Password.');
        }
    }


    public function logout()
    {
        Auth::logout();
        session()->forget('id');

        #vanila php side -- For the Game to work
        session_start();
        session_unset();
        session_destroy();

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

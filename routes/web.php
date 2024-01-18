<?php


use App\Http\Controllers\AboutController;
use App\Http\Controllers\ForgetPasswordManager;
use App\Http\Controllers\TemplateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Contracts\View\View;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('landing');
});
 

    Route::get('/register', [LoginController::class, 'register'])->name('register');
    Route::post('/register', [LoginController::class, 'registerPost'])->name('register');
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/login', [LoginController::class, 'loginPost'])->name('login');

   
    Route::get('/', [TemplateController::class, 'index']);
    Route::delete('/logout', [LoginController::class, 'logout'])->name('logout');
    
    

    Route::get('/landing', function(){
        return view('frontend.landing');
    });

    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    //startmenu route
    Route::get('/startmenu', function () {
        return view('frontend.startmenu');
    })->name('startmenu');

    //about page route
    Route::get('/about', function () {
        return view('frontend.about');
    })->name('about');

    Route::get('/forget-password', [ForgetPasswordManager::class, 'ForgetPassword'])->name('forgetPassword');
    Route::post('/forget-passwordpost', [ForgetPasswordManager::class, 'ForgetPasswordPost'])->name('forget.password.post');
    Route::get('reset-password/{token}', [ForgetPasswordManager::class, 'resetPassword'])->name('reset.password');
    Route::post('/reset-password',[ForgetPasswordManager::class, 'resetPasswordPost'])->name('reset.password.post');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    //profile route
    Route::get('/profile', [ProfileController::class, 'Index'])->name('profile');
    Route::post('/update', [ProfileController::class, 'update'])->name('update');
    Route::post('/change-password', [ProfileController::class, 'changePassword'])->name('change.password');

    //forgetpass route
   
});




<?php


use App\Http\Controllers\AboutController;
use App\Http\Controllers\ForgetPasswordManager;
use App\Http\Controllers\TemplateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\AdminController\AddQuestionController;
use App\Http\Controllers\AdminController\Dashboard;
use App\Http\Controllers\AdminController\DashboardController;
use App\Http\Controllers\AdminController\LeaderboardController;
use App\Http\Controllers\AdminController\ManageUserController;
use App\Http\Controllers\ExerciseControllers;
use App\Http\Controllers\ModulesController;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\AdminController\LanguageController;



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

Route::get('/admin/language', function () {
    return view('frontend.admin.language');
})->name('Language');
Route::get('/', function () {
    return view('landing');
});


Route::post('/admin/AddLanguage', [LanguageController::class, 'AddLanguage'])->name('AddLanguage');

    Route::get('/register', [LoginController::class, 'register'])->name('register');
    Route::post('/register', [LoginController::class, 'registerPost'])->name('register');
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/login', [LoginController::class, 'loginPost'])->name('login');


    //Admin
    Route::get('/admin/question', [AddQuestionController::class, 'Index'])->name('Question');
    Route::post('/admin/addQuestion', [AddQuestionController::class, 'addQuestion'])->name('addQuestion');
    Route::post('/admin/deleteQuestion', [AddQuestionController::class, 'deleteQuestion'])->name('deleteQuestion');
    Route::get('/admin/getQuizEasy', [AddQuestionController::class, 'getQuiz'])->name('getQuiz');
    Route::get('/admin/getQuizMediumJava', [AddQuestionController::class, 'getQuizMediumJava'])->name('getQuizMediumJava');
    Route::get('/admin/getQuizHardJava', [AddQuestionController::class, 'getQuizHardJava'])->name('getQuizHardJava');

    Route::get('/admin/getQuizEasyCsharp', [AddQuestionController::class, 'getQuizEasyCsharp'])->name('getQuizEasyCsharp');
    Route::get('/admin/getQuizMediumCsharp', [AddQuestionController::class, 'getQuizMediumCsharp'])->name('getQuizMediumCsharp');
    Route::get('/admin/getQuizHardCsharp', [AddQuestionController::class, 'getQuizHardCsharp'])->name('getQuizHardCsharp');

    Route::get('/admin/getQuizEasyCplus', [AddQuestionController::class, 'getQuizEasyCplus'])->name('getQuizEasyCplus');
    Route::get('/admin/getQuizMediumCplus', [AddQuestionController::class, 'getQuizMediumCplus'])->name('getQuizMediumCplus');
    Route::get('/admin/getQuizHardCplus', [AddQuestionController::class, 'getQuizHardCplus'])->name('getQuizHardCplus');

    Route::get('/admin/getQuizEasyPython', [AddQuestionController::class, 'getQuizEasyPython'])->name('getQuizEasyPython');
    Route::get('/admin/getQuizMediumPython', [AddQuestionController::class, 'getQuizMediumPython'])->name('getQuizMediumPython');
    Route::get('/admin/getQuizHardPython', [AddQuestionController::class, 'getQuizHardPython'])->name('getQuizHardPython');

    Route::get('/admin/dashboard', [DashboardController::class,'Index'])->name('Dashboard');
    Route::get('/admin/manageUser', [ManageUserController::class,'Index'])->name('ManageUser');
    Route::get('/admin/leaderboard', [LeaderboardController::class,'Index'])->name('Leaderboard');



    
    //MODULE
    Route::get('/moduleLanguage', [ModulesController::class, 'Index'])->name('moduleLanguage');
    Route::get('/java_Default', [ModulesController::class, 'JavaModuleDefault'])->name('JavaDefault');
    Route::get('/java_Intro', [ModulesController::class, 'JavaModuleIntro'])->name('JavaIntro');
    Route::get('/java_Install', [ModulesController::class, 'JavaModuleInstall'])->name('JavaInstall');
    Route::get('/java_Syntax', [ModulesController::class, 'JavaModuleSyntax'])->name('JavaSyntax');
    Route::get('/java_Features', [ModulesController::class, 'JavaModuleFeatures'])->name('JavaFeatures');


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

    Route::get('/Playground', function () {
        return view('frontend.playground');
    })->name('Playground');

    Route::get('/forget-password', [ForgetPasswordManager::class, 'ForgetPassword'])->name('forgetPassword');
    Route::post('/forget-passwordpost', [ForgetPasswordManager::class, 'ForgetPasswordPost'])->name('forget.password.post');
    Route::get('reset-password/{token}', [ForgetPasswordManager::class, 'resetPassword'])->name('reset.password');
    Route::post('/reset-password',[ForgetPasswordManager::class, 'resetPasswordPost'])->name('reset.password.post');

    //profile
    Route::get('/profile', [ProfileController::class, 'Index'])->name('profile');
    Route::post('/update', [ProfileController::class, 'update'])->name('update');
    Route::get('/update', [ProfileController::class, 'Edit'])->name('update');
    Route::get('/profile-edit', [ProfileController::class, 'Edit'])->name('profile.edit');
    Route::post('/profile-edit', [ProfileController::class, 'update'])->name('profile.edit');
    // Route::get('/changepassword', [ProfileController::class, 'changePassword'])->name('changepassword');
    Route::post('/change-password', [ProfileController::class, 'changePasswords'])->name('changepassword');
    Route::get('/changepassword', [ProfileController::class, 'changePassword'])->name('changepassword');
    Route::get('/profile-badge', [ProfileController::class, 'Badge'])->name('profile.badge');
    Route::get('/badge-search', [ProfileController::class, 'Search'])->name('badge.search');
    Route::get('/profile-progress', [ProfileController::class, 'Myprogress'])->name('profile.progress');
    
  //quiz 
    Route::get('/selectLanguage', [QuizController::class, 'Index'])->name('Language');
    Route::get('/pythonDiff', [QuizController::class, 'PythonDifficulty'])->name('pythonDiff');
    Route::get('/javaDiff', [QuizController::class, 'JavaDifficulty'])->name('javaDiff');
    Route::get('/csharpDiff', [QuizController::class, 'CsharpDifficulty'])->name('csharpDiff');
    Route::get('/c++Diff', [QuizController::class, 'CplusDifficulty'])->name('c++Diff');
            
//java quiz items
Route::get('/javaItemEasy', [QuizController::class, 'JavaItemEasy'])->name('javaEasy');
Route::get('/javaItemMedium', [QuizController::class, 'JavaItemMedium'])->name('javaMedium');
Route::get('/javaItemHard', [QuizController::class, 'JavaItemHard'])->name('javaHard');

// quiz java easy
Route::get('/javaQuizEasy10', [QuizController::class, 'JavaQuizEasy10'])->name('JavaEasy10');
Route::get('/javaQuizEasy15', [QuizController::class, 'JavaQuizEasy15'])->name('JavaEasy15');
Route::get('/javaQuizEasy20', [QuizController::class, 'JavaQuizEasy20'])->name('JavaEasy20');
Route::get('/javaQuizEasy30', [QuizController::class, 'JavaQuizEasy30'])->name('JavaEasy30');

// quiz java medium
Route::get('/javaQuizMedium10', [QuizController::class, 'JavaQuizMedium10'])->name('JavaMedium10');
Route::get('/javaQuizMedium15', [QuizController::class, 'JavaQuizMedium15'])->name('JavaMedium15');
Route::get('/javaQuizMedium20', [QuizController::class, 'JavaQuizMedium20'])->name('JavaMedium20');
Route::get('/javaQuizMedium30', [QuizController::class, 'JavaQuizMedium30'])->name('JavaMedium30');


// quiz java hard
Route::get('/javaQuizHard10', [QuizController::class, 'JavaQuizHard10'])->name('JavaHard10');
Route::get('/javaQuizHard15', [QuizController::class, 'JavaQuizHard15'])->name('JavaHard15');
Route::get('/javaQuizHard20', [QuizController::class, 'JavaQuizHard20'])->name('JavaHard20');
Route::get('/javaQuizHard30', [QuizController::class, 'JavaQuizHard30'])->name('JavaHard30');


//python quiz items
Route::get('/pythonItemEasy', [QuizController::class, 'PythonItemEasy'])->name('pythonEasy');
Route::get('/pythonItemMedium', [QuizController::class, 'PythonItemMedium'])->name('pythonMedium');
Route::get('/pythonItemHard', [QuizController::class, 'PythonItemHard'])->name('pythonHard');

// quiz python easy
Route::get('/pythonQuizEasy10', [QuizController::class, 'PythonQuizEasy10'])->name('PythonEasy10');
Route::get('/pythonQuizEasy15', [QuizController::class, 'PythonQuizEasy15'])->name('PythonEasy15');
Route::get('/pythonQuizEasy20', [QuizController::class, 'PythonQuizEasy20'])->name('PythonEasy20');
Route::get('/pythonQuizEasy30', [QuizController::class, 'PythonQuizEasy30'])->name('PythonEasy30');

// quiz python medium
Route::get('/pythonQuizMedium10', [QuizController::class, 'PythonQuizMedium10'])->name('PythonMedium10');
Route::get('/pythonQuizMedium15', [QuizController::class, 'PythonQuizMedium15'])->name('PythonMedium15');
Route::get('/pythonQuizMedium20', [QuizController::class, 'PythonQuizMedium20'])->name('PythonMedium20');
Route::get('/pythonQuizMedium30', [QuizController::class, 'PythonQuizMedium30'])->name('PythonMedium30');


// quiz python hard
Route::get('/pythonQuizHard10', [QuizController::class, 'PythonQuizHard10'])->name('PythonHard10');
Route::get('/pythonQuizHard15', [QuizController::class, 'PythonQuizHard15'])->name('PythonHard15');
Route::get('/pythonQuizHard20', [QuizController::class, 'PythonQuizHard20'])->name('PythonHard20');
Route::get('/pythonQuizHard30', [QuizController::class, 'PythonQuizHard30'])->name('PythonHard30');


//C++ quiz items
Route::get('/c++ItemEasy', [QuizController::class, 'CplusItemEasy'])->name('c++Easy');
Route::get('/c++ItemMedium', [QuizController::class, 'CplusItemMedium'])->name('c++Medium');
Route::get('/c++ItemHard', [QuizController::class, 'CplusItemHard'])->name('c++Hard');

// C++ Quiz Easy
Route::get('/c++QuizEasy10', [QuizController::class, 'CplusQuizEasy10'])->name('C++Easy10');
Route::get('/c++QuizEasy15', [QuizController::class, 'CplusQuizEasy15'])->name('C++Easy15');
Route::get('/c++QuizEasy20', [QuizController::class, 'CplusQuizEasy20'])->name('C++Easy20');
Route::get('/c++QuizEasy30', [QuizController::class, 'CplusQuizEasy30'])->name('C++Easy30');

// C++ Quiz Medium
Route::get('/c++QuizMedium10', [QuizController::class, 'CplusQuizMedium10'])->name('C++Medium10');
Route::get('/c++QuizMedium15', [QuizController::class, 'CplusQuizMedium15'])->name('C++Medium15');
Route::get('/c++QuizMedium20', [QuizController::class, 'CplusQuizMedium20'])->name('C++Medium20');
Route::get('/c++QuizMedium30', [QuizController::class, 'CplusQuizMedium30'])->name('C++Medium30');


// C++ Quiz hard
Route::get('/c++QuizHard10', [QuizController::class, 'CplusQuizHard10'])->name('C++Hard10');
Route::get('/c++QuizHard15', [QuizController::class, 'CplusQuizHard15'])->name('C++Hard15');
Route::get('/c++QuizHard20', [QuizController::class, 'CplusQuizHard20'])->name('C++Hard20');
Route::get('/c++QuizHard30', [QuizController::class, 'CplusQuizHard30'])->name('C++Hard30');



//C# quiz items
Route::get('/csharpItemEasy', [QuizController::class, 'CsharpItemEasy'])->name('c#Easy');
Route::get('/csharpItemMedium', [QuizController::class, 'CsharpItemMedium'])->name('c#Medium');
Route::get('/csharpItemHard', [QuizController::class, 'CsharpItemHard'])->name('c#Hard');

// C# Quiz Easy
Route::get('/csharpQuizEasy10', [QuizController::class, 'CsharpQuizEasy10'])->name('C#Easy10');
Route::get('/csharpQuizEasy15', [QuizController::class, 'CsharpQuizEasy15'])->name('C#Easy15');
Route::get('/csharpQuizEasy20', [QuizController::class, 'CsharpQuizEasy20'])->name('C#Easy20');
Route::get('/csharpQuizEasy30', [QuizController::class, 'CsharpQuizEasy30'])->name('C#Easy30');

// C# Quiz Medium
Route::get('/csharpQuizMedium10', [QuizController::class, 'CsharpQuizMedium10'])->name('C#Medium10');
Route::get('/csharpQuizMedium15', [QuizController::class, 'CsharpQuizMedium15'])->name('C#Medium15');
Route::get('/csharpQuizMedium20', [QuizController::class, 'CsharpQuizMedium20'])->name('C#Medium20');
Route::get('/csharpQuizMedium30', [QuizController::class, 'CsharpQuizMedium30'])->name('C#Medium30');


// C# Quiz hard
Route::get('/csharpQuizHard10', [QuizController::class, 'CsharpQuizHard10'])->name('C#Hard10');
Route::get('/csharpQuizHard15', [QuizController::class, 'CsharpQuizHard15'])->name('C#Hard15');
Route::get('/csharpQuizHard20', [QuizController::class, 'CsharpQuizHard20'])->name('C#Hard20');
Route::get('/csharpQuizHard30', [QuizController::class, 'CsharpQuizHard30'])->name('C#Hard30');


Route::get('/javaExercise', [ExerciseControllers::class, 'Index'])->name('javaExe');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    //profile route
    
    // // Route::post('/update', [ProfileController::class, 'update'])->name('update');
    // // Route::get('/profile-edit', [ProfileController::class, 'Edit'])->name('profile.edit');
    // Route::post('/change-password', [ProfileController::class, 'changePassword'])->name('change.password');
    

    //forgetpass route
   
});




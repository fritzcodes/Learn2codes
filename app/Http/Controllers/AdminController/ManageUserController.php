<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\View\View;

class ManageUserController extends Controller
{
    public function Index(): View
    {
        $data = User::all();
        return View('frontend.admin.manageUser', ['user'=>$data]);
    }


}
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

    public function delete($id)
{
    $user = User::find($id);
    if (!$user) {
        return redirect()->back()->with('error', 'User not found!');
    }

    $user->delete();

    return redirect()->back()->with('message', 'User account deleted successfully!');
}



}
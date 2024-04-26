<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\ClaimedBadge;
use App\Models\User;
use App\Models\Experience;
use Illuminate\View\View;

class ManageUserController extends Controller
{
    public function Index(): View
    {
        $data = User::orderBy('last_online_at', 'DESC')->get();
        return View('frontend.admin.manageUser', ['user'=>$data]);
    }
    public function show($id)
    {
        $data = User::findOrFail($id);
        return response()->json($data);
    }
    public function manageUserRefresh()
    {
        $data = User::orderBy('last_online_at', 'DESC')->get();
        return response()->json($data);
    }

    public function delete($id)
{
    $user = User::find($id);
        if (!$user) {
            return redirect()->back()->with('error', 'User not found!');
        }

        // Delete related experiences
        $user->experiences()->delete();

        // Delete related claimed badges
        $user->claimedBadges()->delete();

        // Delete the user
        $user->delete();

        return redirect()->back()->with('message', 'User account deleted successfully!');
    }
    

}
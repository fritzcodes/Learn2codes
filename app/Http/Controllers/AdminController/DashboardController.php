<?php

namespace App\Http\Controllers\AdminController;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\View\View;


class DashboardController extends Controller
{

    public function Index(): View
    {
        $totalUsers = User::count();
        return view('frontend.admin.dashboard', compact('totalUsers'));
    }

}
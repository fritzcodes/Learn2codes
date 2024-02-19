<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\View\View;


class DashboardController extends Controller
{

    public function Index(): View
    {
        return view('frontend.admin.dashboard');
    }

}
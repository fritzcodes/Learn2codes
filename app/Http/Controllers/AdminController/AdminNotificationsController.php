<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\AdminNotifications;
use Illuminate\Http\Request;

class AdminNotificationsController extends Controller
{
    public function index()
    {
        $data = AdminNotifications::All();
        return view('', compact('data'));
    }

    public function show()
    {
        $data = AdminNotifications::All();
        return response()->json($data);
    }
}

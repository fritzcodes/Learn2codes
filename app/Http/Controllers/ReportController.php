<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReportRequest;
use App\Models\AdminNotifications;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function store(ReportRequest $request)
    {
        $data = $request->validated();
        $notif = AdminNotifications::create($data);
        return response()->json($notif);
    }
}

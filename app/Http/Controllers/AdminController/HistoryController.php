<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Record;
use Illuminate\Http\Request;


class HistoryController extends Controller
{
    public function Index()
    {
        $data = Record::with('admin')->get();
        return view('frontend.admin.history', compact('data'));
    }

}

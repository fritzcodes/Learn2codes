<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Module;

class TryCodeController extends Controller
{
    public function index($id){
        $module = Module::findOrFail($id);
        return view("frontend.trycode", compact('module'));
    }
}

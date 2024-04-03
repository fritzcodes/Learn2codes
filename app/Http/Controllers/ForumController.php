<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class ForumController extends Controller
{
    /**
     * Display the about form.
     */
    public function Index(): View
    {
        $name = Auth::user();
        return view('frontend.forum.forum', compact('name'));
    }

    public function store(){
        
    }

}
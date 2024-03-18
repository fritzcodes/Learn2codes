<?php

namespace App\Http\Controllers;

use Illuminate\View\View;


class ForumController extends Controller
{
    /**
     * Display the about form.
     */
    public function Index(): View
    {
        return view('frontend.forum.forum');
    }

}
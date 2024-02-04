<?php

namespace App\Http\Controllers;

use Illuminate\View\View;


class PlaygroundController extends Controller
{
    /**
     * Display the about form.
     */
    public function Index(): View
    {
        return view('frontend.playground');
    }

}
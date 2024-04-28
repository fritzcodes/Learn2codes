<?php

namespace App\Http\Controllers;

use Illuminate\View\View;


class termsController extends Controller
{
    /**
     * Display the terms form.
     */
    public function Index(): View
    {
        return view('frontend.terms');
    }
    
    public function TermForum(): View
    {
        return view('frontend.termforum');
    }
    
    public function Termsign(): View
    {
        return view('frontend.termsign');
    }
    

}
<?php

namespace App\Http\Controllers;
use Illuminate\View\View;

use Illuminate\Http\Request;

class ModulesController extends Controller
{
    public function index(): View
    {
        return view('frontend.modules.moduleLanguage');
    }   

    public function JavaModuleDefault(): View
    {
        return view('frontend.modules.java.java_Default');
       
    }

    public function JavaModuleIntro(): View
    {
        return view('frontend.modules.java.java_Intro');
       
    }

    public function JavaModuleInstall(): View
    {
        return view('frontend.modules.java.java_Install');
       
    }

    public function JavaModuleSyntax(): View
    {
        return view('frontend.modules.java.java_Syntax');
       
    }

    public function JavaModuleFeatures(): View
    {
        return view('frontend.modules.java.java_Features');
       
    }


}

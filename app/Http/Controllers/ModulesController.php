<?php

namespace App\Http\Controllers;
use Illuminate\View\View;

use Illuminate\Http\Request;
use App\Models\prog_language;
use App\Models\Module;
class ModulesController extends Controller
{
    public function index(): View
    {
        $data = prog_language::all();
        return view('frontend.modules.moduleLanguage', compact('data'));
    }   

    public function JavaModuleDefault($id): View
    {
        $data = Module::where('language', $id)
        ->orderBy('order')
        ->get();

        return view('frontend.modules.module', compact('data', 'id'));

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

<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\View\View;

use Illuminate\Http\Request;
use App\Models\prog_language;
use App\Models\Module;
use Illuminate\Support\Facades\Auth;

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

        $getModuleUser = Experience::where('user_id', Auth::user()->id)
            ->where('language', $id)
            ->get();

        $moduleId = [];

        foreach ($getModuleUser as $item) {
            $parts = explode(",", $item->activity);
            $result = isset($parts[0]) ? trim($parts[0]) : "";
            if ($result == "module") {
                array_push($moduleId, isset($parts[2]) ? trim($parts[2]) : "");
            }
        }

        $moduleCount = Module::whereIn('id', $moduleId)
            ->where('language', $id)
            ->count();

        if (count($data) > 0) {
            $percent = intval(($moduleCount / count($data)) * 100);
        } else {
            $percent = 0; // To avoid division by zero error
        }

        
        return view('frontend.modules.module', compact('data', 'id', 'getModuleUser', 'percent'));
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

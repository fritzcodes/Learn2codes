<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\prog_language;
use App\Http\Requests\Module;
use App\Models\Module as ModuleTable;

class ModuleController extends Controller
{
    public function Index(){
        $data = prog_language::all();
        $data2 = ModuleTable::all();
        return view('frontend.admin.addModule', compact('data', 'data2'));
    }
    public function AddModule(Module $request){
        $module = new ModuleTable();
        $data = $request->validated();
        
        $module->title = $request->title;
        $module->content = $request->content;
        $module->language = $request->language;
        $module->trycode = $request->trycode;

        $module->save();
        return redirect()->back()->with('message', 'Module Added');
        
    }
}

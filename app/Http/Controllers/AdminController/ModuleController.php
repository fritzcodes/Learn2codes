<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\prog_language;
use App\Http\Requests\Module;
use App\Models\Module as ModuleTable;
use App\Http\Requests\UpdateModuleRequest;
use App\Models\Record;
use Illuminate\Support\Facades\Auth;

class ModuleController extends Controller
{
    public function Index()
    {
        $data = prog_language::all();
        $data2 = ModuleTable::all();
        return view('frontend.admin.addModule', compact('data', 'data2'));
    }
    public function AddModule(Module $request)
    {
        $module = new ModuleTable();
        $data = $request->validated();

        $module->title = $request->title;
        $module->content = $request->content;
        $module->language = $request->language;
        $module->trycode = $request->trycode;
        $module->filename = $request->filename;

        $module->save();

        Record::create([
            'admin_id' => Auth::guard('admin')->user()->id,
            'action' => 'added',
            'category' => 'New Module',
            'category_id' => $module->id
        ]);
        return redirect()->back()->with('message', 'Module Added');
    }

    public function languageModule($id)
    {
        $data = ModuleTable::orderBy('order')
        ->where('language', $id)
        ->get();
        return view('frontend.admin.languageModule', compact('data'));
    }

    public function changeOrder(Request $request)
    {
        $order = $request->input('order');
        $datas['success'] = false;
        foreach ($order as $index => $itemId) {
            ModuleTable::where('id', $itemId)->update(['order' => intval($index) + 1]);
            $datas = true;
        }

        return response()->json($datas);
    }


    public function viewModule($id)
    {
        $modules = ModuleTable::where('id', $id)->first(); 
        return view('frontend.admin.viewModule', compact('modules'));
    }

    public function updateModule(UpdateModuleRequest $request)
    {
        $data = $request->validated();
        if(ModuleTable::where('id', $request->id)->update($data)){
            Record::create([
                'admin_id' => Auth::guard('admin')->user()->id,
                'action' => 'updated',
                'category' => 'Module',
                'category_id' => $data->id
            ]);
            return back()->with('msg', "Module Updated");

        }else{
            return back()->with('msg', "Something went wrong.");
        }
        
        
    }

    public function deleteModule($id)
{
    $module = ModuleTable::find($id);
    
    if (!$module) {
        return back()->with('error', 'Module not found');
    }
    
    $module->delete();
    Record::create([
        'admin_id' => Auth::guard('admin')->user()->id,
        'action' => 'deleted',
        'category' => 'Module',
        'category_id' => $module->id
    ]);
    
    return redirect()->back()->with('message', 'Module Deleted');
}

}

<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Http\Requests\ExcerciseRequest;
use App\Models\prog_language;
use App\Models\Exercise;

class ExerciseController extends Controller
{
    public function Index(){
        $data = prog_language::All();
        return View("frontend.admin.exercise", compact('data'));
    }

    public function addExercise(ExcerciseRequest $request){
        $exercise = new Exercise();
        $data = $request->validated();
        
        $exercise->content = $request->content;
        $exercise->language = $request->language;
        $exercise->save();
        return back()->with('message', "Exercise added successfully");
    }

    public function exerciseList($id){
        $data = Exercise::where('language', $id)->get();
        return View("frontend.admin.exerciseList", compact('data'));
    }

    public function viewExercise($id)
    {
        $language = prog_language::All();
        $data = Exercise::findOrFail($id); 
        return view('frontend.admin.exerciseEdit', compact('data', 'language'));
    }

    public function updateExercise(ExcerciseRequest $request, $id)
    {
        $data = $request->validated();
        $exercise = Exercise::findOrFail($id);
        $exercise->update($data);
        return back()->with('message', "Exercise updated successfully");
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exercise;
use App\Models\prog_language;

class ExerciseControllers extends Controller
{
    public function Index($id)
    { 
        $data = Exercise::where('language', $id)->inRandomOrder()->limit(10)->get();
        return view('frontend.exercise.javaExercise', compact('data'));
    }

    public function selectLanguage()
    {
        $data = prog_language::withCount('exercises')->get();
        return view('frontend.quiz.selectLanguageExercise', compact('data'));
    }
       
}

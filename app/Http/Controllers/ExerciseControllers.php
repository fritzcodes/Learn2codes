<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exercise;

class ExerciseControllers extends Controller
{
    public function index()
    {
        $data = Exercise::where('language', 'java')->get();
        return view('frontend.exercise.javaExercise', compact('data'));
    }   
}

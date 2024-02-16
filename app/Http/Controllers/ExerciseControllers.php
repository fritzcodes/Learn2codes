<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciseControllers extends Controller
{
    public function index()
    {
        return view('frontend.exercise.javaExercise');
    }   
}

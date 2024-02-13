<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Quizzes;

class AddQuestionController extends Controller
{
    public function Index()
    {
        $questions = Quizzes::all();
        return View('frontend.admin.addQuestion', compact('questions'));
    }

    public function addQuestion(Request $request)
    {
        $quiz = new Quizzes();
        $quiz->question = $request->question;
        $quiz->answer = $request->answer;
        $quiz->level = $request->level;
        $quiz->language = $request->language;
        $quiz->option1 = $request->option1;
        $quiz->option2 = $request->option2;
        $quiz->option3 = $request->option3;
        $quiz->option4 = $request->option4;


        $quiz->save();
        return back()->with('success', 'Register successfully');
    }
    public function deleteQuestion(Request $request)
    {
        $id = $request->input('id');
        Quizzes::where('id', $id)->delete();

        return back()->with('success', 'Deleted');
    }

    public function getQuiz() //this is Java Easy
    {
        $question = Quizzes::where('language', 'java')
            ->where('level', 'easy')
            ->get();
        return response()->json($question);

        return back()->with('success', 'Deleted');
    }

    public function getQuizMediumJava()// this is java Medium
    {
        $question = Quizzes::where('language', 'java')
            ->where('level', 'medium')
            ->get();
        return response()->json($question);

        return back()->with('success', 'Deleted');
    }

    public function getQuizHardJava()// this is java Hard
    {
        $question = Quizzes::where('language', 'java')
            ->where('level', 'hard')
            ->get();
        return response()->json($question);

        return back()->with('success', 'Deleted');
    }

    public function getQuizEasyCsharp() //this is C# Easy
    {
        $question = Quizzes::where('language', 'c#')
            ->where('level', 'easy')
            ->get();
        return response()->json($question);

        return back()->with('success', 'Deleted');
    }

    public function getQuizMediumCsharp()// this is C# Medium
    {
        $question = Quizzes::where('language', 'c#')
            ->where('level', 'medium')
            ->get();
        return response()->json($question);

        return back()->with('success', 'Deleted');
    }

    public function getQuizHardCsharp()// this is C# Hard
    {
        $question = Quizzes::where('language', 'c#')
            ->where('level', 'hard')
            ->get();
        return response()->json($question);

        return back()->with('success', 'Deleted');
    }

    public function getQuizEasyPython() //this is Python Easy
    {
        $question = Quizzes::where('language', 'python')
            ->where('level', 'easy')
            ->get();
        return response()->json($question);

        return back()->with('success', 'Deleted');
    }

    public function getQuizMediumPython()// this is Python Medium
    {
        $question = Quizzes::where('language', 'python')
            ->where('level', 'medium')
            ->get();
        return response()->json($question);

        return back()->with('success', 'Deleted');
    }

    public function getQuizHardPython()// this is Python Hard
    {
        $question = Quizzes::where('language', 'python')
            ->where('level', 'hard')
            ->get();
        return response()->json($question);

        return back()->with('success', 'Deleted');
    }

    public function getQuizEasyCplus() //this is C++ Easy
    {
        $question = Quizzes::where('language', 'c++')
            ->where('level', 'easy')
            ->get();
        return response()->json($question);

        return back()->with('success', 'Deleted');
    }

    public function getQuizMediumCplus()// this is java Medium
    {
        $question = Quizzes::where('language', 'c++')
            ->where('level', 'medium')
            ->get();
        return response()->json($question);

        return back()->with('success', 'Deleted');
    }

    public function getQuizHardCplus()// this is java Hard
    {
        $question = Quizzes::where('language', 'c++')
            ->where('level', 'hard')
            ->get();
        return response()->json($question);

        return back()->with('success', 'Deleted');
    }
}

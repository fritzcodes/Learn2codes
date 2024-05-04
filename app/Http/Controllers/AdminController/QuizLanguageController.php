<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LanguageAddRequest;
use App\Models\quiz_languages;
use App\Models\Record;
use Illuminate\Support\Facades\Auth;


class QuizLanguageController extends Controller
{
    public function Index()
    {
        $data = quiz_languages::all();
        return View('frontend.admin.quizLanguage', compact('data'));
    }

    public function AddQuizLanguage(LanguageAddRequest $request)
    {
        $language = new quiz_languages();
        $data = $request->validated();

        if ($request->hasFile('picture')) {
            $language = new quiz_languages();
            $image = $request->file('picture');
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $filename);

            $language->picture = $filename;
        }

        $language->language = $request->language;
        $language->save();
        Record::create([
            'admin_id' => Auth::guard('admin')->user()->id,
            'action' => 'added',
            'category' => 'Quiz',
            'category_id' => $language->id
        ]);
        return redirect()->back()->with('message', 'Quiz Language added successfully!');
    }
    public function UpdateLanguage($id)
    {
        
    }
    public function DeleteLanguage($id)
    {

    }

}

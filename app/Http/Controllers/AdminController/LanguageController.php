<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LanguageAddRequest;
use App\Models\prog_language;

class LanguageController extends Controller
{
    public function Index()
    {
        $data = prog_language::all();
        return View('frontend.admin.language', compact('data'));
    }

    public function AddLanguage(LanguageAddRequest $request)
    {
        $language = new prog_language();
        $data = $request->validated();

        if ($request->hasFile('picture')) {
            $language = new prog_language();
            $image = $request->file('picture');
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $filename);

            $language->picture = $filename;
        }

        $language->language = $request->language;
        $language->save();
        return redirect()->back()->with('message', 'Language added successfully!');
    }
    public function UpdateLanguage($id)
    {
        
    }
    public function DeleteLanguage($id)
    {

    }
}

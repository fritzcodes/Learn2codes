<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LanguageAddRequest;
use App\Models\prog_language;
use Illuminate\Support\Facades\Session;
use App\Models\Record;
use Illuminate\Support\Facades\Auth;


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
        Record::create([
            'admin_id' => Auth::guard('admin')->user()->id,
            'action' => 'added',
            'category' => 'New Language',
            'category_id' => $language->id
        ]);
        return redirect()->back()->with('message', 'Language added successfully!');
    }
    public function UpdateLanguage($id)
    {
        
    }

    public function deleteLanguage(Request $request, $id)
{
    try {
        $language = prog_language::find($id);
        if (!$language) {
            return response()->json(['error' => 'Language not found!'], 404);
        }

        $language->delete();
        Record::create([
            'admin_id' => Auth::guard('admin')->user()->id,
            'action' => 'deleted',
            'category' => 'Language',
            'category_id' => $language->id
        ]);

        return response()->json(['message' => 'Language deleted successfully!'], 200);
    } catch (\Exception $e) {
        // Log the error for debugging purposes
        \Log::error('Error deleting language: ' . $e->getMessage());
        return response()->json(['error' => 'An error occurred while deleting the language.'], 500);
    }
}


}

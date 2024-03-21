<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Exercise;
use Illuminate\Http\Request;
use App\Models\Experience;
use Illuminate\Support\Facades\Auth;

class ExpController extends Controller
{
    public function index(Request $request)
    {
        $experience = new Experience();
        $data = $request->validate([
            "activity" => "required",
            "language" => "required",
            "points" => "required",
        ]);
        $data['user_id'] = Auth::user()->id;
        $data['language'] = urldecode($request->language);
        $experience->fill($data);
        $find = Experience::where('activity', $request->activity)
            ->where('user_id', Auth::user()->id)
            ->where('language', urldecode($request->language))
            ->first();

        if ($find) {
                $experience->where('activity', $find->activity)
                    ->where('user_id', $find->user_id)
                    ->where('language', urldecode($request->language))
                    ->update(['points' => intval($find->points + $request->points)]);
        } else {
            
            $experience->save();
        }


        return response()->json(urldecode($request->language));
    }
}

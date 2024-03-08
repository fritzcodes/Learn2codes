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
        $experience->fill($data);
        $find = Experience::where('activity', $request->activity)
            ->where('user_id', Auth::user()->id)
            ->first();

        if ($find) {
            if ($find->points < $request->points) {
                $experience->where('activity', $find->activity)
                    ->where('user_id', $find->user_id)
                    ->update(['points' => $request->points]);
            }
        } else {
            $experience->save();
        }


        return response()->json();
    }
}

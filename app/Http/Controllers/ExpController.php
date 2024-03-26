<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Exercise;
use Illuminate\Http\Request;
use App\Models\Experience;
use Illuminate\Support\Facades\Auth;
use App\Models\Module;

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


        $data = Module::where('language', urldecode($request->language))
            ->orderBy('order')
            ->get();

        $getModuleUser = Experience::where('user_id', Auth::user()->id)
            ->where('language', urldecode($request->language))
            ->get();

        $moduleId = [];

        foreach ($getModuleUser as $item) {
            $parts = explode(",", $item->activity);
            $result = isset($parts[0]) ? trim($parts[0]) : "";
            if ($result == "module") {
                array_push($moduleId, isset($parts[2]) ? trim($parts[2]) : "");
            }
        }

        $moduleCount = Module::whereIn('id', $moduleId)
            ->where('language', 'Java')
            ->count();

        if (count($data) > 0) {
            $percent = intval(($moduleCount / count($data)) * 100);
        } else {
            $percent = 0; // To avoid division by zero error
        }
        return response()->json([urldecode($percent), $request->activity]);
    }
}

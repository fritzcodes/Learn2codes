<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use App\Models\Experience;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\prog_language;
use App\Models\ClaimedBadge;
use App\Http\Requests\UpdateBadgeRequest;

class ProfileController extends Controller
{

    /**
     * Display the user's profile form.
     */
    public function Index(): View
    {
        return view('frontend.profile.profile');
    }


    public function changePasswords(Request $request)
    {
        if (!Hash::check($request->current_password, Auth::user()->password)) {
            $msg = "error";
            return response()->json($msg);
            
        }

        $data = $request->validate([
            'password' => 'required|string|min:8',
            'confirm_password' => 'required|string|same:password',
        ], [
            'confirm_password.same' => 'The new password and confirmation password do not match.',
        ]);

        $hashedPassword['password'] = Hash::make($data['password']);


        $user = Auth::user();


        if ($user->update($hashedPassword)) {
            $msg = 'success';
        } else {
            $msg = "error";
        }
       
        return response()->json($msg);
    }


    public function edit(Request $request): View
    {
        return view('frontend.profile.profile-edit', [
            'user' => $request->user(),
        ]);
        // return view('frontend.profile.editProfile', [
        //     'user' => $request->user(),
        // ]);
    }


    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request)
    {
        $user = Auth::user();
        $data = $request->validated();



        if ($request->hasFile('profile_photo')) {
            $image = $request->file('profile_photo');
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $filename);


            $data['profile_photo'] = $filename;
        }

        if ($user->update($data)) {
            $msg = 'success';
        } else {
            $msg = "error";
        }

        return response()->json($msg);
    }




    public function changePassword(): View
    {
        return view('frontend.profile.changepassword');
    }


    public function Badge(): View
    {
        $id = Auth::user()->id;
        $data = prog_language::All();
        $exp = Experience::where('user_id', $id)->get();
        $claimed = ClaimedBadge::where('user_id', $id)->get();
        return view('frontend.profile.profile-badge', compact('data', 'exp', 'id', 'claimed'));
    }
    public function updateBadge(UpdateBadgeRequest $request)
    {
        $data = $request->validated();
        ClaimedBadge::create($data);
        return response()->json($request);
    }


    public function Myprogress(): View
    {
        function extractFirstWordEndingWithComma($inputString)
        {
            $pattern = '/^\s*([^,]+),/';

            if (preg_match($pattern, $inputString, $matches)) {
                return trim($matches[1]);
            } else {
                return null;
            }
        }

        // Fetch all experiences grouped by language and calculate total points for each language
        $userId = Auth::user()->id;
        $exp = Experience::where('user_id', $userId)->get();
        $quizPoints = 0;
        $modulePoints = 0;
        $exercisePoints = 0;
        foreach ($exp as $item)
            if (count($exp) > 0) { {
                    $act = extractFirstWordEndingWithComma($item->activity);
                    if ($act == "quiz") {
                        $quizPoints += intval($item->points);
                    }
                    if ($act == "module") {
                        $modulePoints += intval($item->points);
                    }
                    if ($act == "exercise") {
                        $exercisePoints += intval($item->points);
                    }
                }
            }

        return view('frontend.profile.profile-progress', compact('quizPoints', 'modulePoints', 'exercisePoints'));
    }




    public function Search(): View
    {
        $claimed = prog_language::whereIn('language', function ($query) {
            $query->select('language')
                ->where('user_id', Auth::user()->id)
                ->from('claimed_badges');
        })->get();
        $notClaimed = prog_language::whereNotIn('language', function ($query) {
            $query->select('language')
                ->where('user_id', Auth::user()->id)
                ->from('claimed_badges');
        })->get();
        return view('frontend.profile.badge-search', compact('claimed', 'notClaimed'));
    }
}

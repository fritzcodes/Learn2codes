<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function Index(): View
    {
        return view('frontend.profile');
    }

    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
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


    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }


    public function changePassword(Request $request)
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
}

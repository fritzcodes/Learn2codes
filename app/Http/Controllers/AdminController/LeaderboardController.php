<?php

namespace App\Http\Controllers\AdminController;

use App\Models\ClaimedBadge;
use App\Models\Experience;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LeaderboardController extends Controller
{

public function Index(): View
{
        $experiences = Experience::all();
        $claimedBadges = ClaimedBadge::all();

        // Initialize an array to store user points
        $userPoints = [];

        // Process each experience
        foreach ($experiences as $experience) {
            // Split the activity by comma and get the first word
            $activityParts = explode(',', $experience->activity);
            $firstWord = trim($activityParts[0]);

            // Calculate points based on the points column
            $points = (float) $experience->points;

            // Get the user_id
            $userId = $experience->user_id;

            // Update user points
            if (!isset($userPoints[$userId])) {
                $userPoints[$userId]['user_id'] = $userId; // Initialize user_id if not exists
            }

            $userPoints[$userId][$firstWord] = ($userPoints[$userId][$firstWord] ?? 0) + $points;
        }

        $userLanguages = [];

        // Process each claimed badge
        foreach ($claimedBadges as $claimedBadge) {
            // Get user_id and language from the claimed badge
            $userId = $claimedBadge->user_id;
            $language = $claimedBadge->language;

            // Check if the user exists in the array
            if (!isset($userLanguages[$userId])) {
                // If user does not exist, initialize an array
                $userLanguages[$userId] = ['user_id' => $userId, 'languages' => []];
            }

            $userLanguages[$userId]['languages'][] = $language;
        }

        $languageCount = [];
        foreach ($userLanguages as $userLanguage) {
            $languageCount[] = ['user_id' => $userLanguage['user_id'], 'badge' => count($userLanguage['languages'])];
        }
        foreach ($userPoints as &$userPoint) {
            // Initialize total_points key with a default value of 0 if it doesn't exist
            $userPoint['total_points'] = ($userPoint['module'] ?? 0) + ($userPoint['quiz'] ?? 0) + ($userPoint['exercise'] ?? 0);
            
            $userId = $userPoint['user_id'];
        
            // Retrieve the user's name from the user table
            $user = User::find($userId);
        
            if ($user) {
                // If user exists, add their name to userPoint
                $userPoint['username'] = $user->username;
                $userPoint['profile_photo'] = $user->profile_photo;
            } else {
                // If user does not exist, set user_name to null
                $userPoint['username'] = null;
                $userPoint['profile_photo'] = null;
            }
        }
        
       //dd($userPoints);
        usort($userPoints, function ($a, $b) {
            return $b['total_points'] <=> $a['total_points']; // Sort in descending order based on 'total_points'
        });
        // dd($userPoints);
        return view('frontend.admin.leaderboard', compact('userPoints'));
    }

}
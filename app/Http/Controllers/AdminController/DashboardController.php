<?php

namespace App\Http\Controllers\AdminController;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\View\View;
use App\Models\ClaimedBadge;
use App\Models\Experience;


class DashboardController extends Controller
{

    public function Index(): View
    {
        $badges = count(ClaimedBadge::All()) ?? null;
        $highestexpUSER = Experience::groupBy('user_id')
            ->selectRaw('user_id, SUM(points) as total_points')
            ->orderByDesc('total_points')
            ->first()->user_id ?? null; //highest exp user

        $highest = Experience::groupBy('user_id')
            ->selectRaw('SUM(points) as total_points')
            ->orderByDesc('total_points')
            ->value('total_points') ?? null;

        $totalUsers = User::count() ?? 0;


        return view('frontend.admin.dashboard', compact('totalUsers', 'badges', 'highest'));
    }
    public function totalBadge()
    {
        $top4badges = ClaimedBadge::selectRaw('language as label, COUNT(*) as value')
            ->groupBy('language')
            ->orderByDesc('value')
            ->limit(4)
            ->get();
        return response()->json($top4badges);
    }
    public function totalExp()
    {
        $top4Exp = Experience::selectRaw('language as label, SUM(points) as value')
            ->groupBy('language')
            ->orderByDesc('value')
            ->limit(4)
            ->get();
        return response()->json($top4Exp);
    }
    public function totalCourse()
    {
        $totalCourses = User::groupBy('course')
            ->selectRaw('course, count(*) as total')
            ->get();

        $courseNames = $totalCourses->pluck('course')->toArray();
        $counts = $totalCourses->pluck('total')->toArray();

        $zippedData = array_map(null, $courseNames, $counts);

        usort($zippedData, function ($a, $b) {
            return $b[1] - $a[1]; // Sort by counts
        });

        $sortedCourseNames = array_column($zippedData, 0);
        $sortedCounts = array_column($zippedData, 1);

        $formattedResult = [$sortedCourseNames, $sortedCounts];

        return response()->json($formattedResult);
    }
}

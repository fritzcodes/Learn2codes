<?php

namespace App\Http\Controllers\AdminController;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\View\View;
use App\Models\ClaimedBadge;
use App\Models\Experience;
use Illuminate\Support\Facades\DB;

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

        $currentMonth = date('n');

        $userCounts = User::select(DB::raw('MONTH(created_at) as month'), DB::raw('COUNT(*) as count'))
            ->groupBy(DB::raw('MONTH(created_at)'))
            ->orderBy(DB::raw('MONTH(created_at)'))
            ->get();

        $months = [
            1 => "January",
            2 => "February",
            3 => "March",
            4 => "April",
            5 => "May",
            6 => "June",
            7 => "July",
            8 => "August",
            9 => "September",
            10 => "October",
            11 => "November",
            12 => "December",
        ];

        $userCountsJson = [];

        // Loop through each month and set count to 0 if no data available
        for ($i = 1; $i <= $currentMonth; $i++) {
            $monthName = $months[$i];
            $count = 0;
            foreach ($userCounts as $userCount) {
                if ($userCount->month == $i) {
                    $count = $userCount->count;
                    break;
                }
            }
            $userCountsJson[] = [$monthName, $count];
        }


      
        return view('frontend.admin.dashboard', compact('totalUsers', 'badges', 'highest', 'userCountsJson'));
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

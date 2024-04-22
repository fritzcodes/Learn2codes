<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class CheckInactiveUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'check:inactive-users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check for inactive users and update their online status';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $inactiveThreshold = now()->subMinutes(5); // Adjust this threshold as needed

        // Find users whose last activity was before the threshold
        $inactiveUsers = User::where('last_online_at', '<', $inactiveThreshold)
            //->where('is_online', true)
            ->get();
        
        // Update their online status to offline
        // $inactiveUsers->each(function ($user) {
        //     User::where('id', $user->id)->update(['is_online' => false]);
        // });
    }
}

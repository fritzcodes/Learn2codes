<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\LastOnlineReminder;
use Illuminate\Support\Facades\Log;

class SendLastOnlineEmails extends Command
{
    protected $signature = 'email:last-online';

    protected $description = 'Send reminder emails to users who were last online 24 hours ago';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        // Get users who were last online 24 hours ago
        $users = User::where('last_online_at', '<', Carbon::now()->subHours(24))->get();
        Log::info($users);
        foreach ($users as $user) {
            // Send email to each user
            Mail::to($user->email)->send(new LastOnlineReminder($user));
        }

        $this->info('Last online reminder emails sent successfully.');
    }
}

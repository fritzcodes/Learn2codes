
@component('mail::message')
# Reminder: Last Online

Hello {{ $user->fname }},

This is a reminder that you were last online at {{ date('F d, Y', strtotime($user->last_online_at)) }}.

Thank you for using our service.

Regards,  
Learn2Code Team
@endcomponent

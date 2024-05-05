
@component('mail::message')
# We Miss You! 🌟

Dear {{ $user->fname }},

This is just a friendly reminder that your last online visit to our platform was on {{ date('F d, Y', strtotime($user->last_online_at)) }}.
We hope you've been doing well since then!

At Learn2Code, we're constantly striving to provide you with the best learning experience possible. Whether you're brushing up on coding skills, diving into new technologies, or exploring exciting projects, we're here to support your journey every step of the way.

Your presence enriches our community, and we'd love to see you back online soon! There's a wealth of resources waiting for you, from insightful tutorials to engaging discussions and helpful tools.

Remember, the world of coding is ever-evolving, and there's always something new to discover. So why not drop by and see what's new since your last visit?

Thank you for choosing Learn2Code. We appreciate your support and look forward to welcoming you back!

Regards,  
Learn2Code Team
@endcomponent

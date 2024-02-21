<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        if ($request->expectsJson()) {
            return null; // Do not redirect for JSON requests
        } else {
            // Check the URL visited and return the corresponding route
            if ($request->is('admin/*')) {
                // If URL matches 'admin/*', redirect to admin login route
                return route('AdminLogin');
            } else {
                // For all other URLs, redirect to the default login route
                return route('login');
            }
        }
    }
}

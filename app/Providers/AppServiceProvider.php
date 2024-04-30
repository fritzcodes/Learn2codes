<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Validator::extend('qcu_email', function ($attribute, $value, $parameters, $validator) {
            // Check if the email contains "qcu" before the @ symbol
            return strpos($value, 'qcu') !== false;
        });
    
        Validator::replacer('qcu_email', function ($message, $attribute, $rule, $parameters) {
            // Custom error message for the qcu_email rule
            return str_replace(':attribute', $attribute, 'The :attribute must contain "qcu" before the @ symbol.');
        });
    }
}

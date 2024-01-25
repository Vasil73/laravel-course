<?php

namespace App\Providers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        Schema::defaultStringLength(150);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        Validator::extend('not_only_whitespace', function ($attribute, $value, $parameters, $validator) {
            return !preg_match('/^\s+$/', $value);
        });
    }
}

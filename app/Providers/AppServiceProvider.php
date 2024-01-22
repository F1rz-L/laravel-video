<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        // View::share([
        //     'negarawan' => 'INDONESIA RAAAAHHH',
        //     'nasionalitas' => 'JAWA',
        // ]);

        View::composer(['home','about'], function($view){
            $view -> with('negarawan', 'Indonesian');
            $view -> with('nasionalitas', 'Jawa');
        });
    }
}

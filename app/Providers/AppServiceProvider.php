<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        //defining a global variable that can be accessed in all views
        View::share(
            ['University' => 'Lovely Professional University',
            'Location' => 'Phagwara, Punjab, India',
            'Link' => 'https://ums.lpu.in/lpuums/LoginNew.aspx',
            ]
        );
    }
}

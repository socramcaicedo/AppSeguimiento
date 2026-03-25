<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

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
        Blade::directive('dashboardRoute', function () {
            return "<?php
            \$rol = auth()->user()->rol ?? null;
            echo match((int)\$rol) {
                5 => route('admin.dashboard'),
                6 => route('instructor.dashboard'),
                7 => route('aprendiz.dashboard'),
                8 => route('usuario.dashboard'),
                default => '/'
            };
        ?>";
        });
    }
}

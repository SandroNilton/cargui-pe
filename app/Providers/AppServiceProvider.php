<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //

        //View::share('prueba', 'Este es el mensaje de prueba global');

        View::composer(['vehicle.index', 'vehicle.create'], 'App\View\Composer\VehicleComposer');
    }
}

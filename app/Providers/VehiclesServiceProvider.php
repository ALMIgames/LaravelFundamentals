<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class VehiclesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $fuel = config('vehicles.fuel');
        $this->app->bind('App\Vehicles\Fuel', $fuel);
    }
}

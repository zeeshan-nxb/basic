<?php

namespace Nxb\Basic;

use Illuminate\Support\ServiceProvider;

class BasicServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //--- include custom routes
        include __DIR__.'/routes.php';

        $this->loadViewsFrom(__DIR__.'/views', 'basic');

        //--- Publish the custom template for used frontend
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/zeeshan-nxb/basic')
        ], 'basic');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        
        //--- Add controller
        $this->app->make('Nxb\Basic\BasicController');

    }
}

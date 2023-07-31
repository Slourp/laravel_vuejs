<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ForceHttpsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        $envsWithHttps = ['production', 'local', 'dev'];
        if (in_array(config('app.env'), $envsWithHttps)) $this->app['request']->server->set('HTTPS', true);
    }
}

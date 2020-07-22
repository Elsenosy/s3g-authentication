<?php

namespace ELSENOSY\S3GAuthentication;

use Illuminate\Support\ServiceProvider;

class S3GAuthenticationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {   
        //        
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Load routes
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        // Load views
        $this->loadViewsFrom(__DIR__.'/resources/views', 'S3GAuthentication');
        
        // Publish to public
        $this->publishes([
            __DIR__.'/resources/views' => resource_path('views/elsenosy/s3guthentication'),
        ]);

        // Publishing assets
        $this->publishes([
            __DIR__.'/public' => public_path('elsenosy/s3guthentication'),
        ], 'public');

    }
}

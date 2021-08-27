<?php

namespace Easoblue\LaraHelper;

use Easoblue\LaraHelper\StringHelper;
use Illuminate\Support\ServiceProvider;


class LaraHelperServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */

    public function boot()
    {   
        
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // $this->mergeConfigFrom(__DIR__.'/../config/config_name.php', 'config_name');
        $this->app->bind('StringHelper', StringHelper::class);
        $loader->alias('StringHelper', StringHelperFacade::class);
    }
}

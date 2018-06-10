<?php

namespace PRDesign\SiteGen;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;
use PRDesign\SiteGen\SiteGenFacade;

class SiteGenServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');

        $this->loadViewsFrom(__DIR__.'/resources/views' , 'sitegen' );

        $this->loadMigrationsFrom(__DIR__.'/migrations');

        if ($this->app->runningInConsole()) {
            $this->commands([
                Commands\SiteGenPublishCommand::class,
            ]);
        }

        $this->publishes([
            __DIR__.'/config/SiteGen.php' => config_path('SiteGen.php'),
        ]);

        $this->publishes([
            __DIR__.'/assets' => public_path('/'),
        ], 'public' );


    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom( dirname(__DIR__).'/src/config/SiteGen.php', 'sitegen' );
        $this->mergeConfigFrom( dirname(__DIR__).'/src/config/database.php', 'sitegen' );

        $this->app->booting( function() {

            $loader = AliasLoader::getInstance();
            $loader->alias( 'SiteGen' , SiteGenFacade::class );

        });

    }
}

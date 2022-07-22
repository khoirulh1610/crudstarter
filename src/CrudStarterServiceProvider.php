<?php

namespace  Khoirulh1610\CrudStarter;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Validator;


use khoirulh1610\crudstarter\Commands\crundstartercommand;

class CrudStarterServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $loader = AliasLoader::getInstance();
        // $loader->alias('CrudStarter', 'khoirulh1610\crudstarter\helpers');

        if($this->app->runningInConsole()) {
            $this->commands('CrudStarter');
        }
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'CrudStarter');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->loadTranslationsFrom(__DIR__.'/localization','CrudStarter');
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->registerSingleton();
        if($this->app->runningInConsole()) {           
            $this->registerSeedsFrom(__DIR__.'/database/seeds');
            $this->publishes([__DIR__.'/configs/crudstarter.php' => config_path('crudstarter.php')],'cs-config');
            $this->publishes([__DIR__.'/userfiles/controllers/CHook.php' => app_path('Http/Controllers/CHook.php')],'cs-hook');
            $this->publishes([__DIR__.'/userfiles/controllers/AdminUsersController.php' => app_path('Http/Controllers/AdminUsersController.php')],'cs-user-controller');
            $this->publishes([__DIR__.'/assets_jb'=>public_path('assets_jb')],'cs-assets');
        }
        // $this->customValidation();
    }

    private function registerSingleton(){
        $this->app->singleton('CrudStarter', function ($app) {
            return new crundstartercommand;
        });
    }

    private function registerSeedsFrom($path)
    {
        # code...
    }
}

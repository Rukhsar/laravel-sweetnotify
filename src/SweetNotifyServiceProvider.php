<?php

namespace Rukhsar\SweetNotify;

use Illuminate\Support\ServiceProvider;

class SweetNotifyServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishFiles();
        $this->LoadViewsFrom(__DIR__.'/views','SweetNotify');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/helpers.php';
    }

    protected function publishFiles()
    {
        $this->publishes([
                    __DIR__.'/sweetalert/sweetalert.css'   =>  public_path('css/sweetalert.css'),
                    __DIR__.'/sweetalert/sweetalert.js'    =>  public_path('js/sweetalert.js'),
                    __DIR__.'/views/sweetnotify.blade.php' =>  base_path('resources/views/vendor/sweetnotify/sweetnotify.blade.php'),
            ], 'sweetnotify');
    }
}

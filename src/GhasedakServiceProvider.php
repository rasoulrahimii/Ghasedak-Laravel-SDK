<?php

namespace Ghasedak\Laravell;

use Illuminate\Support\ServiceProvider;
use Ghasedak\GhasedakApi;

class GhasedakServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//        $this->app->register(GhasedakApi::class);
//        $loader = AliasLoader::getInstance();
//        $loader->alias('Form', '\Collective\Html\FormFacade');

        $this->app->bind('Laravel' ,function (){
            return new GhasedakApi();
        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

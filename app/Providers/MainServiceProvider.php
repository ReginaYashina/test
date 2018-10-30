<?php

namespace App\Providers;

use View;
use Illuminate\Support\ServiceProvider;

class MainServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
       View::composer(['layouts.main','layouts.base'], 'App\Providers\ViewComposers\SizeComposer'); 
	   View::composer(['layouts.main','layouts.base'], 'App\Providers\ViewComposers\CookieComposer');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

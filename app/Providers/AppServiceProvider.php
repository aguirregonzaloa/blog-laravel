<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
   //add to use the command php artisan make:migrate
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //add to use the command php artisan make:migrate
         Schema::defaultStringLength(191);
        
        //this is a general way to show Archives in every "views"
        view()->composer('layouts.sidebar', function ($view){
        
            $view->with('archives',\App\Post::archives());
            
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

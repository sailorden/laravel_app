<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('foods.edit','App\Http\ViewComposers\FoodComposer');
         view()->composer('foods.create','App\Http\ViewComposers\FoodComposer');
        
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

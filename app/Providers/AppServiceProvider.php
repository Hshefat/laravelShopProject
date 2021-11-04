<?php

namespace App\Providers;

//use Facade\FlareClient\View;

use App\Models\Category;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        View::share('name', 'Hello');    //buydefult use all place

        View::composer('frontEnd.includes.menu', function ($view) {     //idevidual use in blade file

            $publishedCategories = Category::where('publicationStatus', 1)->get();
            $view->with('publishedCategories', $publishedCategories);
        });
    }
}
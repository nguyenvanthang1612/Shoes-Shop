<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        if (!app()->runningInConsole()) {
            View::composer(['frontend.layouts._nav','frontend.index','frontend.product.shop-item','frontend.product.shop-list'], function($view) {
                return $view->with('categories', Category::all());
            });

            $users = User::all();
            View::share('', compact('users'));

            //Paginator
            Paginator::defaultView('frontend.layouts._pagination');

        }



    }
}

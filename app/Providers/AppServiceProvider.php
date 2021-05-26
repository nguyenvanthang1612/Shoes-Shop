<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use GuzzleHttp\Psr7\Request;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
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
<<<<<<< HEAD
        View::composer(['frontend.layouts._nav','frontend.index','frontend.product.shop-item','frontend.product.shop-list'], function($view) {
            return $view->with('categories', Category::all());
        });

        $users = User::all();
        View::share('', compact('users'));
=======
        if (!app()->runningInConsole()) {
            View::composer(['frontend.layouts._nav','frontend.index','frontend.product.shop-item','frontend.product.shop-list'], function($view) {
                return $view->with('categories', Category::all());
            });

            $users = User::all();
            View::share('', compact('users'));
        }

>>>>>>> b7042c6f6dbd3d18903b7fc9056127eff9ae1fc3
    }
}

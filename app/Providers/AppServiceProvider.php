<?php

namespace App\Providers;

use App\Models\User;
use App\ViewComposers\AllProductComposer;
use App\ViewComposers\CategoryComposer;
use App\ViewComposers\CustomerComposer;
use App\ViewComposers\OrderComposer;
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
            View::composer([
                'frontend.layouts._nav',
                'frontend.layouts._category-sidenav',
            ], CategoryComposer::class);

            View::composer([
                'frontend.index',
                'frontend.category-product.index'
            ], OrderComposer::class);

            View::composer([
                'frontend.index',
                'frontend.category-product.index'
            ], AllProductComposer::class);

            View::composer([
                'frontend.index',
                'frontend.category-product.index'
            ], CustomerComposer::class);


            //Paginator
            Paginator::defaultView('frontend.layouts._pagination');

        }

    }
}

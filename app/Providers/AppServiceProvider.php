<?php

namespace App\Providers;

use App\Models\User;
use App\ViewComposers\CategoryComposer;
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
                'frontend.index',
                'frontend.product.show',
                'frontend.category-product.index'
            ], CategoryComposer::class);


            //Paginator
            Paginator::defaultView('frontend.layouts._pagination');

        }

    }
}

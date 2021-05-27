<?php

namespace App\Providers;

use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('isMyAccount', function ($account) 
        {
            return $account->id == Auth::guard('web')->user()->id;
        });

        ResetPassword::createUrlUsing(function ($user, string $token) {
            return 'https://localhost/SneakerStore_ITPLUS/public/admin/auth/reset-password?token='.$token;
        });
    }
}

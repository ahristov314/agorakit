<?php

namespace App\Auth;

use Furdarius\OIDConnect\Contract\Authenticator;
use Illuminate\Support\ServiceProvider;

class AuthenticatorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Auth::extend('stateless', function () {
            return new StatelessGuard();
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Authenticator::class, function ($app) {
            return new PersonAuthenticatorAdapter();
        });
    }
}
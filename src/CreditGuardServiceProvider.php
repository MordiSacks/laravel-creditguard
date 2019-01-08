<?php

namespace MordiSacks\LaravelCreditGuard;


use CreditGuard\CreditGuard;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class CreditGuardServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/creditguard.php' => config_path('creditguard.php'),
        ], 'config');
    }


    public function register()
    {
        $this->app->singleton('creditguard', function ($app) {
            /** @var Application $app */
            return new CreditGuard(
                config('creditguard.url'),
                config('creditguard.user'),
                config('creditguard.password'),
                config('creditguard.terminal_id'),
                config('creditguard.mid')
            );
        });
    }

}
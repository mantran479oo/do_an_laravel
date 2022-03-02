<?php

namespace App\Providers;

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

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
    public $bindings = [
        \App\Repositories\Repository\Interfaces\ProductRepositoryInterface::class
        => \App\Repositories\Repository\ProductRepository::class,

        \App\Repositories\Repository\Interfaces\OrderRepositoryInterface::class
        => \App\Repositories\Repository\OrderRepository::class,

        \App\Repositories\Repository\Interfaces\UserRepositoryInterface::class
        => \App\Repositories\Repository\UserRepository::class,

    ];
}

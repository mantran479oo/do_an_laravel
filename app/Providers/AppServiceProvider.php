<?php

namespace App\Providers;

use App\Models\Categorie;
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
        view()->composer('frontend.master.layout', function($view) {
            $catalog = Categorie::with([ 'childs'])->where('parent_id',0 )->get()->toArray();
            foreach ($catalog as $key => $value){
                $catalog[$key]['type'] = ($value['id'] % 2 == 0)? 'right':'left';
            }
            view()->share('catalog', $catalog);
        });

        view()->composer('frontend.master.layout',function($view){
            $cart = session()->get('cart');
            view()->share('cart',$cart);
        });
    }

    public $bindings = [
        \App\Repositories\Repository\Interfaces\ProductRepositoryInterface::class
        => \App\Repositories\Repository\ProductRepository::class,

        \App\Repositories\Repository\Interfaces\OrderRepositoryInterface::class
        => \App\Repositories\Repository\OrderRepository::class,

        \App\Repositories\Repository\Interfaces\UserRepositoryInterface::class
        => \App\Repositories\Repository\UserRepository::class,

        \App\Repositories\Repository\Interfaces\CatalogRepositoryInterface::class
        => \App\Repositories\Repository\CatalogRepository::class,

    ];
}

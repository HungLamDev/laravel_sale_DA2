<?php

namespace App\Providers;

use App\Repositories\Product\ProductRepositoriesinterface;
use App\Repositories\Product\ProductRepository;
use App\Service\Product\ProductService;
use App\Service\Product\ProductServiceInterface;
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
        //product
        $this->app->singleton(
            ProductRepositoriesinterface::class,
            ProductRepository::class
        );
        //Service
        $this->app->singleton(
            ProductServiceInterface::class,
            ProductService::class
        );
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
}

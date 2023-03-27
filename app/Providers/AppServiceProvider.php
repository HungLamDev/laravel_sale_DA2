<?php

namespace App\Providers;

use App\Models\ProductComment;
use App\Repositories\Product\ProductRepositoriesinterface;
use App\Repositories\Product\ProductRepository;
use App\Repositories\ProductComment\ProductCommentRepository;
use App\Repositories\ProductComment\ProductCommentRepositoryinterface;

use App\Service\Product\ProductService;
use App\Service\Product\ProductServiceInterface;
use App\Service\ProductComment\ProductCommentService;
use App\Service\ProductComment\ProductCommentServiceinterface;
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
        //productComent
        $this->app->singleton(
            ProductCommentRepositoryinterface::class,
            ProductCommentRepository::class

        );
        //Service
        $this->app->singleton(
            ProductCommentServiceinterface::class,
            ProductCommentService::class
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

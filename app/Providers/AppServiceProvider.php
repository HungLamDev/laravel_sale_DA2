<?php

namespace App\Providers;

use App\Models\ProductComment;
use App\Repositories\Blog\BlogRepository;
use App\Repositories\Blog\BlogRepositoryinterface;
use App\Repositories\Brand\BrandRepository;
use App\Repositories\Brand\BrandRepositoryinterface;
use App\Repositories\Order\OrderRepository;
use App\Repositories\Order\OrderRepositoryinterface;
use App\Repositories\OrderDetail\OrderDetailRepository;
use App\Repositories\OrderDetail\OrderDetailRepositoryinterface;
use App\Repositories\Product\ProductRepositoriesinterface;
use App\Repositories\Product\ProductRepository;
use App\Repositories\ProductCategory\ProductCategoryRepository;
use App\Repositories\ProductCategory\ProductCategoryRepositoryinterface;
use App\Repositories\ProductComment\ProductCommentRepository;
use App\Repositories\ProductComment\ProductCommentRepositoryinterface;
use App\Repositories\User\UserRepository;
use App\Repositories\User\UserRepositoryinterface;
use App\Service\Blog\BlogService;
use App\Service\Blog\BlogServiceinterface;
use App\Service\Brand\BrandService;
use App\Service\Brand\BrandServiceinterface;
use App\Service\Order\OrderService;
use App\Service\Order\OrderServiceinterface;
use App\Service\OrderDetail\OrderDetailService;
use App\Service\OrderDetail\OrderDetailServiceinterface;
use App\Service\Product\ProductService;
use App\Service\Product\ProductServiceInterface;
use App\Service\ProductCategory\ProductCategoryService;
use App\Service\ProductCategory\ProductCategoryServiceinterface;
use App\Service\ProductComment\ProductCommentService;
use App\Service\ProductComment\ProductCommentServiceinterface;
use App\Service\User\UserService;
use App\Service\User\UserServiceinterface;
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

        $this->app->singleton(
            ProductCommentServiceinterface::class,
            ProductCommentService::class
        );
        //Blog
        $this->app->singleton(
            BlogRepositoryinterface::class,
            BlogRepository::class,
        );
        $this->app->singleton(
            BlogServiceinterface::class,
            BlogService::class,
        ); //ProductCategory
        $this->app->singleton(
            ProductCategoryRepositoryinterface::class,
            ProductCategoryRepository::class,
        );
        $this->app->singleton(
            ProductCategoryServiceinterface::class,
            ProductCategoryService::class,
        );
        //Brand
        $this->app->singleton(
            BrandRepositoryinterface::class,
            BrandRepository::class,
        );
        $this->app->singleton(
            BrandServiceinterface::class,
            BrandService::class,
        );
        //oder
        $this->app->singleton(
            OrderRepositoryinterface::class,
            OrderRepository::class,
        );
        $this->app->singleton(
            OrderServiceinterface::class,
            OrderService::class,
        );
        //oder
        $this->app->singleton(
            OrderDetailRepositoryinterface::class,
            OrderDetailRepository::class,
        );
        $this->app->singleton(
            OrderDetailServiceinterface::class,
            OrderDetailService::class,
        );
        //oder
        $this->app->singleton(
            UserRepositoryinterface::class,
            UserRepository::class,
        );
        $this->app->singleton(
            UserServiceinterface::class,
            UserService::class,
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

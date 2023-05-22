<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Service\Blog\BlogServiceinterface;
use App\Service\Product\ProductServiceInterface;
use App\Service\ProductCategory\ProductCategoryService;
use App\Service\ProductCategory\ProductCategoryServiceinterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $productService;
    private $BlogService;
    private $productCategoryService;
    public function __construct(ProductServiceInterface $productServiceInterface, BlogServiceinterface $blogService, ProductCategoryService $productCategoryService)
    {
        $this->productService = $productServiceInterface;
        $this->BlogService = $blogService;
        $this->productCategoryService  = $productCategoryService;
    }

    public function index()
    {
        $categories = $this->productCategoryService->all();
        $featuredProducts = $this->productService->getFeaturedProducts();
        $blogs = $this->BlogService->getLatestBlog();

        return view('front.index', compact('featuredProducts', 'blogs', 'categories'));
    }
}

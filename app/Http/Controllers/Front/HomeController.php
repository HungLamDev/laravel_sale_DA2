<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Service\Blog\BlogServiceinterface;
use App\Service\Product\ProductServiceInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $productService;
    private $BlogService;
    public function __construct(ProductServiceInterface $productServiceInterface, BlogServiceinterface $blogService)
    {
        $this->productService = $productServiceInterface;
        $this->BlogService = $blogService;
    }

    public function index()
    {
        $featuredProducts = $this->productService->getFeaturedProducts();
        $blogs = $this->BlogService->getLatestBlog();

        return view('front.index', compact('featuredProducts', 'blogs'));
    }
}

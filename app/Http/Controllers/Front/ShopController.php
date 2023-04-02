<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Service\Brand\BrandServiceinterface;
use App\Service\Product\ProductServiceInterface;
use App\Service\ProductCategory\ProductCategoryServiceinterface;
use App\Service\ProductComment\ProductCommentServiceinterface;
use Illuminate\Http\Request;
use Nette\Schema\Expect;

class ShopController extends Controller
{
    private $productService;
    private $productCommentService;
    private $productCategoryService;
    private $brandService;
    // ProductCommentServiceinterface $productCommentService

    public function __construct(ProductServiceInterface $productService, ProductCategoryServiceinterface $productCategoryService, ProductCommentServiceinterface $productCommentService)
    {
        $this->productService = $productService;
        $this->productCommentService = $productCommentService;
        $this->productCategoryService = $productCategoryService;
        //$this->brandService = $brandService;
    }

    public function show($id)
    {
        $categories = $this->productCategoryService->all();
        // $brands = $this->brandService->all();
        $product = $this->productService->find($id);
        $relatedProduct = $this->productService->getRelatedProducts($product);

        return view('front.shop.show', compact('product', 'relatedProduct', 'categories'));
    }
    public function postComment(Request $request)
    {
        $this->productCommentService->create($request->all());
        return redirect()->back();
    }
    public function index(Request $request)
    {
        $categories = $this->productCategoryService->all();
        // $brands = $this->brandService->all();
        $products = $this->productService->getProductOnindex($request);
        return view('front.shop.index', compact('products', 'categories',));
    }
    public function category($categoryName, Request $request)
    {
        $categories = $this->productCategoryService->all();
        // $brands = $this->brandService->all();
        $products = $this->productService->getProductByCategory($categoryName, $request);
        return view('front.shop.index', compact('products', 'categories',));
    }
}

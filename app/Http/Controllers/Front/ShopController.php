<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Service\Product\ProductServiceInterface;
use App\Service\ProductComment\ProductCommentServiceinterface;
use Illuminate\Http\Request;
use Nette\Schema\Expect;

class ShopController extends Controller
{
    private $productService;
    private $productCommentService;
    public function __construct(ProductServiceInterface $productService, ProductCommentServiceinterface $productCommentService)
    {
        $this->productService = $productService;
        $this->productCommentService = $productCommentService;
    }

    public function show($id)
    {
        $product = $this->productService->find($id);
        return view('front.shop.show', compact('product'));
    }
    public function postComment(Request $request)
    {
        $this->productCommentService->create($request->all());
        return redirect()->back();
    }
}

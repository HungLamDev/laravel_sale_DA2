<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Service\Product\ProductServiceInterface;
use App\Service\ProductCategory\ProductCategoryService;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;


class CartController extends Controller
{
    private $productCategoryService;
    private $productService;
    public function __construct(ProductServiceInterface $productService, ProductCategoryService $productCategoryService)
    {
        $this->productService = $productService;
        $this->productCategoryService  = $productCategoryService;
    }
    public function index()
    {
        $categories = $this->productCategoryService->all();
        $carts = Cart::Content();
        $total = Cart::total(0, '.', '');
        $subtotal = Cart::subtotal(0, '.', '');
        return view('front.shop.cart', compact('carts', 'total', 'subtotal', 'categories'));
    }
    public function add(Request $request)
    {
        if ($request->ajax()) {
            $product = $this->productService->find($request->productId);
            $response['cart'] = Cart::add([
                'id' => $product->id,
                'name' => $product->name,
                'qty' => 1,
                'price' => $product->discount ?? $product->price,
                'weight' => $product->weight ?? 0,
                'options' => [
                    'images' => $product->productImages,

                ],
            ]);
            $response['count'] = Cart::count();
            $response['total'] = Cart::total(0, '.', '');
            return $response;
        }
        return back();
    }
    public function delete(Request $request)
    {
        if ($request->ajax()) {
            $request['cart'] = Cart::remove($request->rowId);
            $response['count'] = Cart::count();
            $response['total'] = Cart::total(0, '.', '');
            $response['subtotal'] = Cart::subtotal(0, '.', '');
            return  $response;
        }
        return back();
    }
    public function destroy()
    {
        Cart::destroy();
    }
    public function update(Request $request)
    {
        if ($request->ajax()) {
            $response['cart'] = Cart::update($request->rowId, $request->qty);
            $response['count'] = Cart::count();
            $response['total'] = Cart::total(0, '.', '');
            $response['subtotal'] = Cart::subtotal(0, '.', '');
            return $response;
        }
    }
}

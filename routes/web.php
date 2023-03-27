<?php

use App\Http\Controllers\Front\ShopController;
use App\Repositories\Product\ProductRepositoriesinterface;
use App\Service\Product\ProductServiceInterface;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function (ProductRepositoriesinterface $productRepository) {
//     return view('front.index');
//     //return \App\Models\Product::find(1)->brand;
//     // return $productRepository->all();
// });
Route::get(
    '/',
    function () {
        return view('front.index');
        //return \App\Models\Product::find(1)->brand;
        //return $productservice->all();
    }
);
Route::get('shop/product/{id}', [ShopController::class, 'show']);
Route::post('shop/product/{id}', [ShopController::class, 'postComment']);

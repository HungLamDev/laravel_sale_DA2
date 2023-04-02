<?php

use App\Http\Controllers\Front\CartController;
use App\Http\Controllers\Front\HomeController;
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
Route::get('/', [HomeController::class, 'index']);
Route::prefix('shop')->group(function () {
    Route::get('product/{id}', [ShopController::class, 'show']);
    Route::post('product/{id}', [ShopController::class, 'postComment']);
    Route::get('', [ShopController::class, 'index']);
    Route::get('category/{categoryName}', [ShopController::class, 'category']);
});


Route::prefix('cart')->group(function () {
    Route::get('add', [CartController::class, 'add']);
    Route::get('/', [CartController::class, 'index']);
    Route::get('delete', [CartController::class, 'delete']);
});

<?php

use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductDetailController;
use App\Http\Controllers\Admin\ProductimageController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Front\AccountController;
use App\Http\Controllers\Front\CartController;
use App\Http\Controllers\Front\CheckOutController;
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

//Front Client 
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
    Route::get('destroy', [CartController::class, 'destroy']);
    Route::get('update', [CartController::class, 'update']);
});
Route::prefix('checkout')->group(function () {
    route::get('', [CheckOutController::class, 'index']);
    route::post('/', [CheckOutController::class, 'addOrder']);
    route::get('/result', [CheckOutController::class, 'result']);
    route::get('/vnPayCheck', [CheckOutController::class, 'vnPayCheck']);
});
Route::prefix('account')->group(function () {
    route::get('login', [AccountController::class, 'login']);
    route::post('login', [AccountController::class, 'checkLogin']);
    route::get('logout', [AccountController::class, 'logout']);
    route::get('register', [AccountController::class, 'register']);
    route::post('register', [AccountController::class, 'postRegister']);
    Route::prefix('my-order')->middleware('CheckMemberLogin')->group(function () {
        route::get('/', [AccountController::class, 'myOrderIndex']);
        route::get('{id}', [AccountController::class, 'myOrderShow']);
    });
    //admin-Dashboaard

});
Route::prefix('admin')->middleware('CheckAdminLogin')->group(function () {
    Route::redirect('', 'admin/user');

    Route::resource('user', UserController::class);
    Route::resource('product', ProductController::class);
    Route::resource('category', ProductCategoryController::class);
    Route::resource('brand', BrandController::class);
    Route::resource('product/{product_id}/image', ProductimageController::class);
    Route::resource('product/{product_id}/detail', ProductDetailController::class);
    Route::resource('order', OrderController::class);
    Route::prefix('login')->group(function () {
        route::get('', [\App\Http\Controllers\Admin\HomeController::class, 'getLogin'])->withoutMiddleware('CheckAdminLogin');
        route::post('', [\App\Http\Controllers\Admin\HomeController::class, 'postLogin'])->withoutMiddleware('CheckAdminLogin');
    });
    Route::get('logout', [\App\Http\Controllers\Admin\HomeController::class, 'logout']);
});

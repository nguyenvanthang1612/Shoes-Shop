<?php

use App\Http\Controllers\Web\AuthenticateController;
use App\Http\Controllers\Web\CartController;
use App\Http\Controllers\Web\CategoryProductController;
use App\Http\Controllers\Web\IndexController;
use App\Http\Controllers\Web\ProductController;
use App\Http\Controllers\Web\UserController;
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

/**
 * Frontend routes here
 */
Route::group(['prefix' => '/', 'middleware' => 'must-be-user'], function () {

    Route::get('/', [IndexController::class, 'index'])->name('frontend.index');
    //index - register - edit
    Route::get('user/edit-profile', [UserController::class, 'editProfile'])->name('frontend.user.edit-profile');
    Route::put('user/edit-profile', [UserController::class, 'updateProfile'])->name('frontend.user.update-profile');
    //Cart
    Route::get('addCart/{id}', [CartController::class, 'addCart'])->name('frontend.cart.add-cart');
    Route::get('deleteItemCart/{id}', [CartController::class, 'deleteItemCart'])->name('frontend.cart.delete-item');
    Route::get('listCart', [CartController::class, 'showListCart']);
    Route::get('reloadCartItemInBadge', [CartController::class, 'reloadCartItemInBadge'])->name('frontend.cart.reloadCartItemInBadge');
    Route::get('deleteCart', [CartController::class, 'deleteListCart']);
    Route::get('cart/products', [CartController::class, 'reloadProductsInCardPage'])->name('frontend.cart.reload-products-in-cardpage');
    Route::post('cart/update-quantity', [CartController::class, 'updateCartQuantity'])->name('frontend.cart.updateCartQuantity');
    Route::get('cart/enter-address', [CartController::class, 'enterProductAddress'])->name('frontend.cart.enter-address');

    //Category
    //Product-category
    Route::get('categories/{category}/products', [CategoryProductController::class, 'index'])->name('frontend.category-product.index');

    //Product-Cart
    Route::get('products/addCart/{id}', [ProductController::class, 'addCart']);
    Route::get('products/deleteItemCart/{id}', [ProductController::class, 'deleteItemCart']);
    //Product show
    Route::get('products/{product}', [ProductController::class, 'show'])->name('frontend.product.show');
    // authenticate
    Route::get('login', [AuthenticateController::class, 'showLoginForm']);
    Route::post('login', [AuthenticateController::class, 'login'])->name('frontend.authenticate.login');
    Route::get('register', [AuthenticateController::class, 'showRegisterForm'])->name('register');
    Route::post('register', [AuthenticateController::class, 'register'])->name('register');

    Route::post('logout', [AuthenticateController::class, 'logout'])->name('logout');
});

Route::get('/preview', function () {
    return view('frontend.user.edit-address');
});

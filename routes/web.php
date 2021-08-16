<?php

use App\Http\Controllers\Language\LocalizationController;
use App\Http\Controllers\Web\AuthenticateController;
use App\Http\Controllers\Web\CartController;
use App\Http\Controllers\Web\CategoryProductController;
use App\Http\Controllers\Web\IndexController;
use App\Http\Controllers\Web\ProductController;
use App\Http\Controllers\Web\SocialController;
use App\Http\Controllers\Web\SubcribeEmailController;
use App\Http\Controllers\Web\UserController;
use App\Models\Product;
use Illuminate\Support\Facades\Lang;
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
Route::group(['prefix' => '/', 'middleware' => ['must-be-user', 'localization']], function () {

    Route::get('/', [IndexController::class, 'index'])->name('frontend.index');
    //index - register - edit
    Route::get('user/edit-profile', [UserController::class, 'editProfile'])->name('frontend.user.edit-profile');
    Route::put('user/edit-profile', [UserController::class, 'updateProfile'])->name('frontend.user.update-profile');
    //Cart
    Route::get('addCart/{id}', [CartController::class, 'addCart'])->name('frontend.cart.add-cart');
    Route::get('deleteItemCart/{id}', [CartController::class, 'deleteItemCart'])->name('frontend.cart.delete-item');
    Route::get('listCart', [CartController::class, 'showListCart'])->name('frontend.cart.list-cart');
    Route::get('reloadCartItemInBadge', [CartController::class, 'reloadCartItemInBadge'])->name('frontend.cart.reloadCartItemInBadge');
    Route::get('deleteCart', [CartController::class, 'deleteListCart']);
    Route::get('cart/products', [CartController::class, 'reloadProductsInCardPage'])->name('frontend.cart.reload-products-in-cardpage');
    Route::post('cart/update-quantity', [CartController::class, 'updateCartQuantity'])->name('frontend.cart.updateCartQuantity');
    Route::get('cart/enter-address', [CartController::class, 'enterShippingAddress'])->name('frontend.cart.enter-address');
    Route::put('cart/enter-address', [CartController::class, 'updateShippingAddress'])->name('frontend.cart.update-shipping-address');

    Route::get('cart/confirm', [CartController::class, 'confirmOrder'])->name('frontend.cart.confirm-order');
    //Category
    //Product-category
    Route::get('categories/{category}/products', [CategoryProductController::class, 'index'])->name('frontend.category-product.index');

    //Product show
    Route::get('products/{product}', [ProductController::class, 'show'])->name('frontend.product.show');
    // authenticate
    Route::get('login', [AuthenticateController::class, 'showLoginForm']);
    Route::post('login', [AuthenticateController::class, 'login'])->name('frontend.authenticate.login');
    Route::get('register', [AuthenticateController::class, 'showRegisterForm'])->name('frontend.showRegisterForm');
    Route::post('register', [AuthenticateController::class, 'register'])->name('register');
    Route::get('auth/facebook', [SocialController::class, 'facebookRedirect']);
    Route::get('auth/facebook/callback', [SocialController::class, 'loginWithFacebook']);

    Route::post('logout', [AuthenticateController::class, 'logout'])->name('logout');

    Route::post('continue-shopping', [CartController::class, 'continueShopping'])->name('frontend.cart.continue-shopping');

    Route::get('{language}', [LocalizationController::class, 'changeLanguage'])->name('change-language');
});

// Subcribe Email
Route::post('/send-subcribe-email', [SubcribeEmailController::class, 'sendMail']);

Route::get('/sample', function () {
    return Product::orderBy('id')->cursorPaginate(10);
});

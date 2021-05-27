<?php

use App\Http\Controllers\Web\AuthenticateController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Web\CartController;
use App\Http\Controllers\Web\CategoryProductController;
use App\Http\Controllers\Web\WebCategoryController;
use App\Http\Controllers\Web\IndexController;
use App\Http\Controllers\Web\ProductController;
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
Route::group(['prefix' => '/'], function () {

    Route::get('/', [IndexController::class, 'index']);
    //index - register - edit
    Route::get('user/index-page/{id}', [IndexController::class, 'mainUserIndex']);

    Route::get('user/edit-page/{id}', [IndexController::class, 'edit']);
    Route::put('user/edit-page/{id}', [IndexController::class, 'update']);

    Route::get('user/address-edit-page/{id}', [IndexController::class, 'addressEdit']);
    Route::put('user/address-edit-page/{id}', [IndexController::class, 'addressUpdate']);
    //Cart
    Route::get('/addCart/{id}', [CartController::class,'addCart']);
    Route::get('deleteItemCart/{id}', [CartController::class,'deleteItemCart']);
    //Category
    Route::get('categories/{id}/shop-list', [WebCategoryController::class,'index']);
    //Product
    Route::get('categories/{category}/products', [CategoryProductController::class, 'index'])->name('product-categories-list');

    Route::get('products/{product}', [ProductController::class, 'show'])->name('frontend.product.show');
    // authenticate
    Route::get('/login', [AuthenticateController::class, 'showLoginForm']);
    Route::post('/login', [AuthenticateController::class, 'login'])->name('user.login');
    Route::get('register', [AuthenticateController::class, 'showRegisterForm'])->name('register');
    Route::post('register', [AuthenticateController::class, 'register'])->name('register');

    Route::get('/logout', function() {
        Auth::logout();
        return redirect('/');
    });
});

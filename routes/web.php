<?php

use App\Http\Controllers\Admin\AdminAccountController;
use App\Http\Controllers\Admin\AdminAuthenticateController;

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Web\WebCategoryController;
use App\Http\Controllers\Web\WebIndexController;
use App\Http\Controllers\Web\RegisterController;
use App\Http\Controllers\Web\WebProductController;
use Illuminate\Routing\RouteAction;
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
    Route::get('/', [WebIndexController::class, 'index']);
    Route::get('register-page/create', [WebIndexController::class,'create']);
    Route::post('register-page', [WebIndexController::class,'store']);
    //Category
    Route::get('categories/{id}/shop-list', [WebCategoryController::class,'index']);
    //Product
    Route::get('/',[WebProductController::class,'index']);
});
/**
 * Admin route here (Backend)
 */
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', function () {
        return view('backend.index');
    });
    // authenticate
    Route::get('auth/login', [AdminAuthenticateController::class, 'showLoginForm']);
    Route::post('auth/login', [AdminAuthenticateController::class, 'login']);

    // account
    Route::get('account/create_account', [AdminAccountController::class, 'showCreateAccountForm']);

    //category
    Route::get('categories', [CategoryController::class, 'index']);

    //product
    Route::get('product/all', [ProductController::class, 'allIndex']);
    Route::get('product/man', [ProductController::class, 'manIndex']);
    Route::get('product/woman', [ProductController::class, 'womanIndex']);
    Route::get('product/kid', [ProductController::class, 'kidIndex']);
});

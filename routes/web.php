<?php

use App\Http\Controllers\Admin\AdminAccountController;
use App\Http\Controllers\Admin\AuthenticateController as AdminAuthenticateController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;


use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Web\WebCategoryController;
use App\Http\Controllers\Web\WebIndexController;
use App\Http\Controllers\Web\RegisterController;
use App\Http\Controllers\Web\WebProductController;
use App\Http\Middleware\Admin\CheckUser;
use Illuminate\Routing\RouteAction;
// use Illuminate\Support\Facades\Auth;
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
    //register
    Route::get('register-page/create', [WebIndexController::class,'create']);
    Route::post('register-page', [WebIndexController::class,'store']);
    //Category
    Route::get('categories/{id}/shop-list', [WebCategoryController::class,'index']);
    //Product
    Route::get('/',[WebProductController::class,'index']);
    Route::get('products/{id}/item',[WebProductController::class,'itemIndex']);
    Route::get('products/categories/{id}/list',[WebProductController::class,'listIndex']);
    // authenticate
    Route::get('/login', [AuthenticateController::class, 'showLoginForm']);
    Route::post('/login', [AuthenticateController::class, 'login'])->name('user.login');
    Route::get('/logout', function() {
        Auth::logout();
    });
});
/**
 * Admin route here (Backend)
 */
Route::group(['prefix' => 'admin'], function () {
    Route::get('auth/login', [AdminAuthenticateController::class, 'showLoginForm'])
    ->name('admin.login')->middleware('CheckLogout');

    Route::get('/', function () {
        return view('backend.index');
    })->name('admin.index')->middleware('CheckUser');

    // authenticate
    Route::post('auth/login', [AdminAuthenticateController::class, 'login']);
    Route::get('auth/logout', function() {
        Auth::logout();
        return redirect(route('admin.login'));
    })->middleware('CheckUser');

    // account
    Route::get('account/create_account', [AdminAccountController::class, 'showCreateAccountForm']);

    //category
    Route::get('categories', [CategoryController::class, 'index']);

    //product
    Route::get('product', [ProductController::class, 'allIndex']);
    Route::get('product/man', [ProductController::class, 'manIndex']);
    Route::get('product/woman', [ProductController::class, 'womanIndex']);
    Route::get('product/kid', [ProductController::class, 'kidIndex']);
    Route::get('product/create', [ProductController::class, 'create']);
    Route::post('product', [ProductController::class, 'store']);
    Route::put('product', [ProductController::class, 'upload']);
    Route::get('product/{id}/edit', [ProductController::class, 'edit']);
    Route::put('product/{id}', [ProductController::class, 'update']);
    Route::delete('product/delete/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
});

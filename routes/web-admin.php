<?php


/**
 * Admin route here (Backend)
 */

use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Admin\AuthenticateController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\StatisticalController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin'], function () {
    // authenticate
    Route::get('auth/login', [AuthenticateController::class, 'showLoginForm'])
    ->name('admin.login')->middleware('logged-out');
    Route::post('auth/login', [AuthenticateController::class, 'login'])->middleware('logged-out');
    Route::get('auth/forgot-password', [AuthenticateController::class, 'forgotPasswordForm']);
    Route::post('auth/forgot-password', [AuthenticateController::class, 'forgotPassword']);
    Route::get('auth/reset-password/{token}', [AuthenticateController::class, 'resetPasswordForm'])->name('backend.password.resetPasswordForm');
    Route::put('auth/reset-password', [AuthenticateController::class, 'resetPassword'])->name('backend.password.reset');

    Route::group(['middleware' => 'authenticated-as-admin'], function () {
        Route::get('auth/logout', function () {
            Auth::logout();
            return redirect(route('admin.login'));
        });

        //dashboard
        Route::get('/', [DashboardController::class, 'index'])->name('admin.index');

        // account
        Route::get('account/admin_management', [AccountController::class, 'adminIndex'])->middleware('superadmin');
        Route::get('account/client_management', [AccountController::class, 'clientIndex']);
        Route::get('account/create_account', [AccountController::class, 'showCreateAccountForm'])->middleware('superadmin');
        Route::post('account/create_account', [AccountController::class, 'createAccountAdmin']);
        Route::put('account/admin_management', [AccountController::class, 'upload']);
        Route::get('account/edit', [AccountController::class, 'edit']);
        Route::put('account/edit/{id}', [AccountController::class, 'update']);
        Route::delete('account/delete/{id}', [AccountController::class, 'destroy']);
        Route::get('account/change-password', [AccountController::class, 'showChangePasswordForm']);
        Route::put('account/change-password/{id}', [AccountController::class, 'changePassword']);
        //search
        Route::post('account/search/admin', [AccountController::class, 'searchAdmin']);
        Route::post('account/search/client', [AccountController::class, 'searchClient']);

        //category
        Route::get('categories', [CategoryController::class, 'index']);

        //product
        Route::get('product', [ProductController::class, 'allIndex'])->name('product.index');
        Route::get('product/man', [ProductController::class, 'manIndex']);
        Route::get('product/woman', [ProductController::class, 'womanIndex']);
        Route::get('product/kid', [ProductController::class, 'kidIndex']);
        Route::get('product/create', [ProductController::class, 'create']);
        Route::post('product', [ProductController::class, 'store']);
        Route::put('product', [ProductController::class, 'upload']);
        Route::get('product/{id}/edit', [ProductController::class, 'edit']);
        Route::put('product/{id}', [ProductController::class, 'update']);
        Route::delete('product/delete/{id}', [ProductController::class, 'destroy'])->name('product.destroy');

        // order
        Route::get('order', [OrderController::class, 'showOrder']);
        Route::get('order/order-item', [OrderController::class, 'showOrderItem']);
        Route::get('order/shipping', [OrderController::class, 'showShipping']);

        // statistical
        Route::get('statistical', [StatisticalController::class, 'showStatistical']);

    });
});

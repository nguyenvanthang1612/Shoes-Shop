<?php

use App\Http\Controllers\Admin\AuthenticateController as AdminAuthenticateController;
use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Web\IndexController as WebIndexController;
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
});
/**
 * Admin route here (Backend)
 */
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', function () {
        return view('backend.index');
    });
    Route::get('auth/login', [AdminAuthenticateController::class, 'showLoginForm']);
    Route::post('auth/login', [AdminAuthenticateController::class, 'login']);
});

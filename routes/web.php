<?php

use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\IndexController;
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


// trang bán hàng
Route::get('/', [IndexController::class, 'index']);

// trang admin
Route::get('auth/login', [AuthenticateController::class, 'showLoginForm']);

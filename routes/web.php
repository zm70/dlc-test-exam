<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WEB\ProductController;
use App\Http\Controllers\WEB\CategoryController;
use App\Http\Controllers\WEB\DashboardController;
use App\Http\Controllers\WEB\LoginController;
use App\Http\Controllers\WEB\WebController;
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
Auth::routes();
Route::get('/', [WebController::class,'index'])->name('home');
Route::get('/api-doc', [WebController::class,'apiDoc'])->name('api-doc');

Route::group([ 'prefix' => 'administrator'], function () {
    Route::get('login', [DashboardController::class,'login'])->name('admin.login');
    Route::post('login', [LoginController::class,'login'])->name('login');
});
Route::group(['middleware' => ['auth', 'isAdmin'], 'prefix' => 'administrator'], function () {
    Route::get('/', [DashboardController::class,'index'])->name('dashboard');
    Route::resource('products', ProductController::class);
    Route::post('products/change-status', [ProductController::class,'changeStatus'])->name('products.change-status');
    Route::resource('categories', CategoryController::class);
    Route::post('categories/change-status', [CategoryController::class,'changeStatus'])->name('categories.change-status');
});



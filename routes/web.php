<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WEB\ProductController;
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

Route::get('/', [WebController::class,'index'])->name('home');
Route::get('/products', [ProductController::class,'index'])->name('products.index');
Route::get('/products/create', [ProductController::class,'create'])->name('products.create');
Route::post('/products/add', [ProductController::class,'store'])->name('products.store');
Route::get('/api-doc', [WebController::class,'apiDoc'])->name('api-doc');

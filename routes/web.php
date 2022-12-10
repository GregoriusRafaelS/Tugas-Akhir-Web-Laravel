<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/semua-category', [CategoryController::class, 'semua_category']);

Route::get('/isi-category/{a}', [ProductController::class, 'isi_category']);

Route::get('/detil-product/{b}', [ProductController::class, 'detil_product']);

Route::post('/add-shopping-cart', [productController::class, 'simpan_cart'])->name('add-shopping-cart');

Route::get('/shopping-cart', [productController::class, 'getShoppingCart']);
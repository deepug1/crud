<?php

use Illuminate\Support\Facades\Route;
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

Route::group(['prefix' => 'admin'], function(){
    Route::get('dashboard', [ProductController::class, 'index']);
    Route::get('product', [ProductController::class, 'Product'])->name('product');
    Route::get('add_product', [ProductController::class, 'add_product'])->name('add_product');
    Route::post('add_product', [ProductController::class, 'store'])->name('product_store');
    Route::get('/update_product/{$id}', [ProductController::class, 'update_product'])->name('product_update');
    // Route::post('update_product', [ProductController::class, 'update'])->name('product_update_store');
    Route::get('delete_product/{$id}', [ProductController::class, 'delete'])->name('product_delete');

});
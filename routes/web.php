<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    $products = Product::orderBy('id', 'desc')->paginate(request('per_page', 5));
    return view('welcome', ["products" => $products]);
})->name('home');

Route::get('/add', [ProductController::class, 'create']);
Route::post('/product.store', [ProductController::class, 'createStore'])->name('product.store');
Route::post('/edit-product/{id}', [ProductController::class, 'updateProduct'])->name('edit-product');
Route::get('/edit/{id}', [ProductController::class, 'editProduct'])->name('edit');
Route::get('/delete/{id}', [ProductController::class, 'deleteProduct'])->name('delete');
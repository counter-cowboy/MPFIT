<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('products.index');
});
Route::get('/orders/{order}/status', [OrderController::class, 'status'])->name('orders.status');

Route::resources([
    'products' => ProductController::class,
    'orders' => OrderController::class,
    'categories' => CategoryController::class,
]);

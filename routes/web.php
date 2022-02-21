<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\AdminController;




Route::any('/', [WebController::class, 'index']);
Route::any('product-detail/{id}', [WebController::class, 'productDetail']);
Route::any('pro-cat/{id}', [WebController::class, 'productByCat']);
Route::any('order-now', [WebController::class,'orderNow']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/admin-dashboard', [AdminController::class, 'index']);
Route::get('/products', [AdminController::class, 'products']);
Route::any('/add-product', [AdminController::class, 'addProduct']);

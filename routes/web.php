<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;




Route::any('/', [WebController::class, 'index']);
Route::any('product-detail/{id}', [WebController::class, 'productDetail']);
Route::any('pro-cat/{id}', [WebController::class, 'productByCat']);
Route::any('order-now', [WebController::class,'orderNow']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;




Route::any('/', [WebController::class, 'index']);
Route::any('product-detail/{id}', [WebController::class, 'productDetail']);
Route::any('pro-cat/{id}', [WebController::class, 'productByCat']);
Route::any('order-now', [WebController::class,'orderNow']);
Route::any('about-us', [WebController::class,'aboutUs']);
Route::any('contact-us', [WebController::class,'contactUs']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' =>['auth']], function () {

Route::get('/admin-home', [AdminController::class, 'index']);
Route::get('/products', [AdminController::class, 'products']);
Route::any('/add-product', [AdminController::class, 'addProduct']);
Route::any('/save-product', [AdminController::class, 'saveProduct']);

Route::any('/orders-list', [OrderController::class, 'ordersList']);
Route::any('/update-order-status/{id}', [OrderController::class, 'updateOrderStatus']);


    });


Route::get('/logout',[App\Http\Controllers\Auth\LoginController::class, 'logout']);

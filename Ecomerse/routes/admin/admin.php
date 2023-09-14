<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\WishListController;
use Illuminate\Support\Facades\Route;



Route::get('/dashboard',[HomeController::class,'index']);

Route::resource('slider',SliderController::class);
Route::resource('banner',BannerController::class);
Route::resource('categories',CategoryController::class);
Route::resource('products',ProductsController::class);
Route::resource('wishlist',WishListController::class);


Route::resource('contacts',ContactController::class);


?>

<?php

use App\Http\Controllers\front\AboutController;
use App\Http\Controllers\front\checkoutController;
use App\Http\Controllers\front\GalleryController;
use App\Http\Controllers\front\ContactController;
use App\Http\Controllers\front\ReservationController;
use App\Http\Controllers\front\shopigCartController;
use App\Http\Controllers\front\SingleProductController;
use App\Http\Controllers\front\HomeController;
use App\Http\Controllers\front\CartController;
use App\Http\Controllers\front\OrderController;

use App\Http\Controllers\front\FavouriteController;
use App\Http\Controllers\front\sliderController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/view-category/{name}', [HomeController::class, 'viewcategory']);


Route::get('/about', [AboutController::class, 'index']);





Route::get('/single-menu/{id}', [SingleProductController::class, 'index'])->name('single.product.index');

Route::get('/search',[HomeController::class,'search']);


Route::get('/viewgallery', [galleryController::class, 'index']);



Route::get('/contact', [ContactController::class, 'index']);
Route::get('/viewreservation', [ReservationController::class, 'index']);

Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');

Route::get('/favourites', [FavouriteController::class, 'index']);

Route::middleware('auth')->group(function () {


    Route::post('/reservation/store', [ReservationController::class, 'store'])->name('reservation.store');


    Route::post('/cart/{id}', [CartController::class, 'store'])->name('cart.store');
    Route::post('/cart/fav/{id}', [CartController::class, 'addToFav'])->name('cart.addToFav');
    Route::delete('/cart/fav/{id}', [CartController::class, 'delete'])->name('fav.delete');
    Route::get('/ShopingCart', [shopigCartController::class, 'index'])->name('shoping.index');
    Route::delete('/carts/{id}', [CartController::class, 'destroy'])->name('carts.delete');
    Route::get('/checkout', [checkoutController::class, 'index']);
    Route::post('/place-order', [checkoutController::class, 'placeorder'])->name('checkout.store');


});








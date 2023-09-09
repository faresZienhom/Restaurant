<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('front.pages.home.index');
});

Route::get('/about', function () {
    return view('front.pages.about.index');
});


Route::get('/account', function () {
    return view('front.pages.auth.index');
});


Route::get('/profile', function () {
    return view('front.pages.auth.profile');
});

Route::get('/accountdetails', function () {
    return view('front.pages.auth.accountdetails');
});


Route::get('/branch', function () {
    return view('front.pages.branch.index');
});


Route::get('/orders', function () {
    return view('front.pages.orders.index');
});

Route::get('/ordersdetails', function () {
    return view('front.pages.orders.orderdetails');
});

Route::get('/ordersresevied', function () {
    return view('front.pages.orders.orderresevied');
});

Route::get('/orderstrack', function () {
    return view('front.pages.orders.trackorder');
});


Route::get('/shop', function () {
    return view('front.pages.shop.index');
});

Route::get('/singelproduct', function () {
    return view('front.pages.shop.singel-product');
});

Route::get('/policy', function () {
    return view('front.pages.refund-policy');
});
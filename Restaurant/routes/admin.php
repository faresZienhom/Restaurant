<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BranchController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Admin\ServantController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\OrderController;

use App\Http\Controllers\Admin\TableController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::middleware(['auth','check.type'])->group(function(){

    Route::group(
        [
            'prefix' => LaravelLocalization::setLocale(),
            'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
        ], function(){
            Route::get('/dashboard',[AdminController::class,'index']);

            Route::resource('slider',SliderController::class);
            Route::resource('/branches', BranchController::class)->except('show');

            Route::resource('categories',CategoryController::class);

            Route::resource('contacts',ContactController::class);

            Route::resource('menus',MenuController::class);

            Route::resource('gallerys',GalleryController::class);
            Route::resource('servantes',ServantController::class);
            Route::resource('tables',TableController::class);

            Route::resource('/orders', OrderController::class)->except('show');

            Route::resource('/resevation', ReservationController::class);

        });
})


?>

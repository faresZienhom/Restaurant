<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/dashboard',[HomeController::class,'index']);



?>

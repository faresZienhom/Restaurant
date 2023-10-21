<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class galleryController extends Controller
{
    public function index(){

        $galleries = Gallery::get();
        return view('front.pages.gallary',compact('galleries'));
    }

}

<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

    $sliders = Slider::where("status",1)->get();
    return view("front.pages.home.index",compact("sliders"));

}
}

<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class sliderController extends Controller
{
    public function index(){
        $sliders = Slider::get();
        return view('front.layout.slider',compact('sliders'));
    }

}

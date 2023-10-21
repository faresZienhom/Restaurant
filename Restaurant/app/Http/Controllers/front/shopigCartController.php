<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class shopigCartController extends Controller
{
    public function index(){


        $orders = Order::where('user_id',auth()->user()->id)->get();
        return view('front.pages.cart.shoping-cart',compact('orders'));
    }


}

<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderReceived;
use App\Models\OrderReceivedItem;
use Illuminate\Http\Request;

class checkoutController extends Controller
{
    public function index(){

        $carts = Order::where('user_id',auth()->user()->id)->get();
        return view('front.pages.cart.checkout',compact('carts'));
    }

    public function  placeorder(request $request){
   

        $request->validate([
            'name' => ['required', 'max:50', 'string'],
            'phone' => ['required'],
            'email' => ['required', 'max:50', 'email'],
            'Address1' => ['required'],
            'Address2' => ['required'],
            'city' => ['required'],
            'country' => ['required'],
            'pincode' => ['required'],
            'message' => ['required', 'max:500', 'string'],
            'tracking_no'=>['required'],

        ]);
         $tracking_no = 'order'.rand(1,10000);

        OrderReceived::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'Address1' => $request->Address1,
            'Address2' => $request->Address2,
            'city' => $request->city,
            'country' => $request->country,
            'pincode' => $request->pincode,
            'message' => $request->message,
            'tracking_no' => $tracking_no,

        ]);

        $carts = Order::where('user_id',auth()->user()->id)->get();

        foreach ($carts as $cart){

            OrderReceivedItem::create([



            ]);
        }
}



}


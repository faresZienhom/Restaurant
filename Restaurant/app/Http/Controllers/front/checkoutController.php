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


        $order = new OrderReceived();

           $order->name = $request->name;
           $order->phone = $request->phone;
           $order->email = $request->email;
           $order->phone = $request->phone;
           $order->Address1 = $request->Address1;
           $order->Address2 = $request->Address2;
           $order->city = $request->city;
           $order->country = $request->country;
           $order->pincode = $request->pincode;
           $order->tracking_no ='order' .rand(1,10000);

           $order->save();


        $carts = Order::where('user_id',auth()->user()->id)->get();

        foreach ($carts as $cart){

            OrderReceivedItem::create([

                'orderrecieved_id' =>$order->id,
                'menu_id' =>$cart->menu_id,
                'price' =>$cart->price,
                'quantity' =>$cart->quantity,


            ]);

        }

            return back()
            ->with("success","order has added  successfully");

}



}


<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Favourite;
use App\Models\Order;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function store(Request $request, $id)
    {

        $menu = Menu::where('id', $id)->first();

        $request->validate([
            'quantity' => 'required|integer',

        ]);

        $total = $menu->price * $request->quantity;

        Order::create([
            'price' =>  $menu->price,
            'image' => $menu->image,
            'quantity' => $request->quantity,
            'total'    => $total,
            'user_id' => Auth::user()->id,
            'menu_id' => $id,
            'status'  => '0'

        ]);
        return back()
        ->with("success","order has added to your cart");

    }

    public function addToFav(Request $request, $id)
    {

        $menu = Menu::where('id', $id)->first();
        Favourite::create([
            'user_id' => Auth::user()->id,
            'menu_id' => $id,
        ]);
        return back()
        ->with("success","product has added to favourts");

    }



    function destroy($id){

        $order = Order::find($id);
        $order -> delete();
        return back()->with('message', 'data deleted successfully');

    }


    function delete($id){

        $fav = Favourite::find($id);
        $fav -> delete();
        return back()->with('message', 'data deleted successfully');

    }


}

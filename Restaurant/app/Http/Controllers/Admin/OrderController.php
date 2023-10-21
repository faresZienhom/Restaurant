<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::all();
        return view('admin.pages.orders.index', compact('orders'));
    }

    public function create(){
        $users = User::get();
        $menus = Menu::get();
        return view('admin.pages.orders.add', compact('menus', 'users'));
    }

    public function store(Request $request){

        $request->validate([
            'image' => ['required', 'image','mimes:png,jpg,jpeg','mimetypes:image/png,image/jpeg'],
            'price' => 'required|integer',
            'quantity' => 'required|integer',

        ]);
        $ext = $request->file('image')->getClientOriginalExtension();
        $imageName = "order" . time() .rand(100,100000) . "." . $ext;
        $request->file("image")->move(public_path("images/order"),$imageName);


        $total = $request->price * $request->quantity;

        Order::create([
            'image'=>$imageName,
            'price' =>  $request->price,
            'quantity' => $request->quantity,
            'total'    => $total,
            'user_id' => $request->user_id,
            'menu_id' => $request->menu_id,
            'status'  => '0'
        ]);
        return back()->with('message', 'data deleted successfully');
    }

    public function edit(Order $order){
        $users = User::get();
        $menus = Menu::get();
        return view('admin.pages.orders.edit', compact('order', 'menus', 'users'));
    }


    public function update(Request $request , $id){
        $request->validate([
            'image' => ['sometimes', 'image','mimes:png,jpg,jpeg','mimetypes:image/png,image/jpeg'],
            'price' => 'required|integer',
            'quantity' => 'required|integer',
        ]);


        $order =Order::findorfail($id);
        if($request->hasFile('image')){

        $ext = $request->file('image')->getClientOriginalExtension();
        $newName = "order" . time() .rand(100,100000) . "." . $ext;
        $path =public_path("images/order/". $order->image);
        if(file_exists($path)){
          unlink($path);
        }
        $request->file("image")->move(public_path("images/order"),$newName);



        $total = $request->price  * $request->quantity;

        $order->update([
            'image'=>$newName ?? $order->image,
            'price' =>  $request->price,
            'quantity' => $request->quantity,
            'total'    => $total,
            'user_id' => $request->user_id,
            'menu_id' => $request->menu_id,
            'status'  => '0'
        ]);
        return back()->with('message', 'data deleted successfully');
    }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return back()->with('message', 'data deleted successfully');
    }
}

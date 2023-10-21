<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use App\Models\Reservation;
use App\Models\Contact;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){

        $order_count = Order::count();
        $res_count = Reservation::count();
        $message_count = Contact::count();
        $users_count = User::where('type','user')->count();

    return view("admin.pages.home.index",compact('order_count','users_count','res_count','message_count'));

}
}

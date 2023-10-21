<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class SingleProductController extends Controller
{
    public function index($id){


        $menu = Menu::where('id', $id)->first();
        $menus = Menu::get();
        return view('front.pages.menus.singel-product',compact('menu' ,'menus'));
    }
}

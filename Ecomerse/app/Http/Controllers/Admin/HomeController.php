<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){


        $users_count = User::where('type','user')->count();
        $sliders_count = Slider::count();

        return view("admin.pages.home.index",compact("users_count","sliders_count"));

    }
}

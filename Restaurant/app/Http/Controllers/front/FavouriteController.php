<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Favourite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavouriteController extends Controller
{
    public function index(){
        $favourites = Favourite::where('user_id', Auth::user()->id)->get();

        return view('front.pages.favourite', compact('favourites'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function index()
    {
        // migrations
        $users = User::get();
        $i = 5;
        return view('Home', compact('users', 'i'));
    }
}

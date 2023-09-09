<?php

namespace App\Http\Controllers;

use App\Models\Rate;
use Illuminate\Http\Request;

class RateController extends Controller
{
    function index(){

        $rates = Rate::get();
        return view('admin.rate.index',compact('rates'));
    }
    public function destroy(string $id)
    {
        Rate::where('id', $id)->delete();
        return redirect()->route('rate.index');
    }


}

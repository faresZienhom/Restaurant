<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Models\Table;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index(){
        $tables = Table::get();
        return view('front.pages.reservation',compact('tables'));
    }
    public function store(Request $request)
    {
         $request->validate([
            'name' => ['required', 'max:50', 'string'],
            'phone' => ['required'],
            'email' => ['required', 'max:50', 'email'],
            'res_date' =>['required','date'],
            'guest_number' =>['required','numeric'],


        ]);
        Reservation::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'res_date' => $request->res_date,
            'guest_number'=>$request->guest_number,
            'table_id' => $request->table_id,

        ]);
        return back()
        ->with("success","data created successfully");
    }

}

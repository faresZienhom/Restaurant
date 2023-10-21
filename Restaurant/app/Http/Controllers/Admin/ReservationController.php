<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Models\Table;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {

        $reservation = Reservation::get();
        return view('admin.pages.reservations.index',compact('reservation'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $tables = Table::get();
        return view('admin.pages.reservations.add', compact('tables'));

    }

    /**
     * Store a newly created resource in storage.
     */
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
        return back()->with('message', 'data added succeded');

    }

    /**
     * Display the specified resource.
     */
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $reservation = Reservation::findorfail($id);
        $tables = Table::all();

        return view('admin.pages.reservations.edit',compact('reservation','tables'));


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $reservation = Reservation::findorfail($id);

        $request->validate([
            'name' => ['required', 'max:50', 'string'],
            'phone' => ['required'],
            'email' => ['required', 'max:50', 'email'],
            'res_date' =>['required','date'],
            'guest_number' =>['required','numeric'],
        ]);
        $reservation->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'res_date' => $request->res_date,
            'guest_number' => $request->guest_number,
            'table_id' => $request->table_id,

        ]);


        return back()->with('message', 'data added succeded');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $resevation = Reservation::find($id);
        $resevation -> delete();
        return redirect('/resevation');
    }

}

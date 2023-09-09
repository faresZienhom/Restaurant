<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Doctor;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookings = Booking::get();
        return view('admin.booking.index', compact('bookings'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $doctors = Doctor::get();
        return view('admin.booking.create', compact('doctors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Validator::make($data, [
            'name' => ['required', 'string', 'min:5', 'max:20'],
            'email' => ['required', 'email', 'unique:doctors,email'],
            "phone" =>['required']
        ])->validate();
        Booking::create($data);
        return redirect()->route('booking.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        return view('admin.booking.show', compact('booking'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        return view('admin.booking.update', compact('booking'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $booking = Booking::find($id);

        $booking->name = $request->name;
        $booking->email = $request->email;
        $booking->phone = $request->phone;

        $booking->save();


        return redirect()->route('booking.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        Booking::where('id', $id)->delete();
        return redirect()->route('booking.index');
    }
}

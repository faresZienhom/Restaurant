<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Major;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctors = Doctor::get();
        return view('admin.doctor.index', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $majors = Major::get();
        return view('admin.doctor.create', compact('majors'));
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
            'password' => ['required', 'min:5', 'max:20'],
            'image' => ['required', 'image']
        ])->validate();
        $data['password'] = Hash::make($request->password);
        $path = $request->file('image')->store('public');
        $path = str_replace('public', 'storage', $path);
        $data['image'] = $path;
        Doctor::create($data);
        return redirect()->route('doctor.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Doctor $doctor)
    {
        return view('admin.doctor.show', compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Doctor $doctor)
    {
        return view('admin.doctor.update', compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $doctor = Doctor::find($id);

        $doctor->name = $request->name;
        $doctor->city = $request->city;
        $doctor->email = $request->email;

        $doctor->save();


        return redirect()->route('doctor.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Doctor::where('id', $id)->delete();
        return redirect()->route('doctor.index');
    }
}

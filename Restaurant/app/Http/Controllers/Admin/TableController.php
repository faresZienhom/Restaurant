<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Table;
use Illuminate\Http\Request;

class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $tables = Table::paginate(5);
        return view('admin.pages.tables.index',compact('tables'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.pages.tables.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'name' => ['required'],
            'guest_number' =>['required','numeric'],
            'status' => ['required', 'in:0,1'],

        ]);
        table::create([
            'name'=>$validation['name'],
            'guest_number'=>$validation['guest_number'],
            'status'=>$validation['status']

        ]);
        return back()
        ->with("success","table created successfully");

    }

    /**
     * Display the specified resource.
     */
    public function show(Table $table)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $tables = Table::findorfail($id);

        return view('admin.pages.tables.update',compact('tables'));


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $tables = Table::find($id);

        $tables->name = $request->name;
        $tables->guest_number = $request->guest_number;
        $tables->status = $request->status;

        $tables->save();

        return back()
        ->with("success","table updated successfully");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $tables = Table::find($id);
        $tables -> delete();
        return redirect('/tables');
    }
}

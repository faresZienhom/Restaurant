<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Servant;
use Illuminate\Http\Request;

class ServantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $servantes = Servant::paginate(5);
        return view('admin.pages.servantes.index',compact('servantes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.pages.servantes.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'name' => ['required','min:5'],
            'address' =>['required'],
            'job' =>['required']

        ]);
        Servant::create([
            'name'=>$validation['name'],
            'address'=>$validation['address'],
            'job'=>$validation['job']

        ]);
        return back()
        ->with("success","Servant created successfully");

    }

    /**
     * Display the specified resource.
     */
    public function show(Servant $Servant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $servantes = Servant::findorfail($id);

        return view('admin.pages.servantes.update',compact('servantes'));


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $servantes = Servant::find($id);

        $servantes->name = $request->name;
        $servantes->address = $request->address;
        $servantes->job = $request->job;

        $servantes->save();

        return back()
        ->with("success","Servant updated successfully");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $servantes = Servant::find($id);
        $servantes -> delete();
        return redirect('/servantes');
    }
}

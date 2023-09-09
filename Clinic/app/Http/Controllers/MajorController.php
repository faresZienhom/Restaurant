<?php

namespace App\Http\Controllers;

use App\Models\Major;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    function index(){

        $majors = Major::get();
        return view('admin.major.index',compact('majors'));
    }

    function destroy($id){

        $major = Major::find($id);
        $major -> delete();
        return redirect('/majors');
    }
    function edit ($id){

        $major = Major::find($id);
        return view('admin.major.update',compact('major'));
    }

    function update ($id , request $request){

        $major = Major::find($id);
        //1
        //$major->update(['title'=>$request->title]);

        $major->title = $request->title;
        $major->save();

        return redirect()->route('major.index');

    }
    public function show(Major $major)
    {
        return view('admin.major.show', compact('major'));
    }

    function create (){

        return view('admin.major.create');
    }

    function store(request $request){

         Major::create(['title'=>$request->title]);
        return redirect()->route('major.index');




    }


}

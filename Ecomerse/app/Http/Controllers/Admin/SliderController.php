<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Validator;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = Slider::get();
        return view('admin.pages.sliders.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.sliders.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $validation = $request->validate(([
        'image' => ['required', 'image','mimes:png,jpg,jpeg','mimetypes:image/png,image/jpeg'],
        'status' => ['required', 'in:0,1'],
      ]));

      $ext = $request->file('image')->getClientOriginalExtension();
      $imageName = "slider" . time() .rand(100,100000) . "." . $ext;
      $request->file("image")->move(public_path("images/slider"),$imageName);
      Slider::create([
         'image'=>$imageName,
         'status'=>$validation ['status'],

      ]);
            return back()
            ->with("success","slider created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $slider =Slider::findorfail($id);
        return view('admin.pages.sliders.update',compact('slider'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        {
            $validation = $request->validate(([
                'image' => ['sometimes', 'image','mimes:png,jpg,jpeg','mimetypes:image/png,image/jpeg'],
                'status' => ['required', 'in:0,1'],
              ]));
              $slider =Slider::findorfail($id);
              if($request->hasFile('image')){

              $ext = $request->file('image')->getClientOriginalExtension();
              $newName = "slider" . time() .rand(100,100000) . "." . $ext;
              $path =public_path("images/slider/". $slider->image);
              if(file_exists($path)){
                unlink($path);
              }
              $request->file("image")->move(public_path("images/slider"),$newName);

            }
              $slider->update([
                 'image'=>$newName ?? $slider->image,
                 'status'=>$validation ['status'],

              ]);
                    return back()
                    ->with("success","slider created successfully");

    }
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slider =Slider::findorfail($id);
        $path =public_path("images/slider/" . $slider->image);
        if(file_exists($path)){
          unlink($path);
        }
       $slider->delete();
        return redirect()->route('slider.index');

    }
}

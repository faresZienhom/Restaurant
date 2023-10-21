<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Validator;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gallerys = gallery::get();
        return view('admin.pages.gallery.index',compact('gallerys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.gallery.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $validation = $request->validate(([
        'image' => ['required', 'image','mimes:png,jpg,jpeg','mimetypes:image/png,image/jpeg'],
        'name' => ['required'],
      ]));

      $ext = $request->file('image')->getClientOriginalExtension();
      $imageName = "gallery" . time() .rand(100,100000) . "." . $ext;
      $request->file("image")->move(public_path("images/gallery"),$imageName);
      gallery::create([
         'image'=>$imageName,
         'name'=>$validation ['name'],

      ]);
            return back()
            ->with("success","gallery created successfully");
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
        $gallery =gallery::findorfail($id);
        return view('admin.pages.gallery.update',compact('gallery'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        {
            $validation = $request->validate(([
                'image' => ['sometimes', 'image','mimes:png,jpg,jpeg','mimetypes:image/png,image/jpeg'],
                'name' => ['required'],
              ]));
              $gallery =gallery::findorfail($id);
              if($request->hasFile('image')){

              $ext = $request->file('image')->getClientOriginalExtension();
              $newName = "gallery" . time() .rand(100,100000) . "." . $ext;
              $path =public_path("images/gallery/". $gallery->image);
              if(file_exists($path)){
                unlink($path);
              }
              $request->file("image")->move(public_path("images/gallery"),$newName);

            }
              $gallery->update([
                 'image'=>$newName ?? $gallery->image,
                 'name'=>$validation ['name'],

              ]);
                    return back()
                    ->with("success","gallery created successfully");

    }
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gallery =gallery::findorfail($id);
        $path =public_path("images/gallery/" . $gallery->image);
        if(file_exists($path)){
          unlink($path);
        }
       $gallery->delete();
        return redirect()->route('gallerys.index');

    }
}

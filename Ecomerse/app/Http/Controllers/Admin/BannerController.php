<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = Banner::get();
        return view('admin.pages.banners.index',compact('banners'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.banners.create');

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
          $request->file("image")->move(public_path("images/banner"),$imageName);
          Banner::create([
             'image'=>$imageName,
             'status'=>$validation ['status'],

          ]);
                return back()
                ->with("success","banner created successfully");

    }

    /**
     * Display the specified resource.
     */
    public function show(Banner $banner)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banner $banner)
    {
        return view('admin.pages.banners.update',compact('banner'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Banner $banner)
    {

        $validation = $request->validate(([
            'image' => ['sometimes', 'image','mimes:png,jpg,jpeg','mimetypes:image/png,image/jpeg'],
            'status' => ['required', 'in:0,1'],
          ]));
          if($request->hasFile('image')){

          $ext = $request->file('image')->getClientOriginalExtension();
          $newName = "slider" . time() .rand(100,100000) . "." . $ext;
          $path =public_path("images/banner/". $banner->image);
          if(file_exists($path)){
            unlink($path);
          }
          $request->file("image")->move(public_path("images/banner"),$newName);

        }
          $banner->update([
             'image'=>$newName ?? $banner->image,
             'status'=>$validation ['status'],

          ]);
                return back()
                ->with("success","banner created successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    {
        $banner->delete();
        return redirect()->route('banner.index');
    }
}

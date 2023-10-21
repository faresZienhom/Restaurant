<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus = menu::with('category')->paginate(5);
        return view('admin.pages.menus.index',compact('menus'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {
        $categories = Category::get();
        return view('admin.pages.menus.create',compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $validation = $request->validate(([
        'name' =>['required'],
        'description' =>['required'],
        'image' => ['required', 'image','mimes:png,jpg,jpeg','mimetypes:image/png,image/jpeg'],
        'price'=>['required'],
        'categories_id'=>['required','numeric']
  ]));

      $ext = $request->file('image')->getClientOriginalExtension();
      $imageName = "menu" . time() .rand(100,100000) . "." . $ext;
      $request->file("image")->move(public_path("images/menu"),$imageName);
      menu::create([
          'name'=>$validation ['name'],
          'description'=>$validation ['description'],
         'image'=>$imageName,
         'price'=>$validation ['price'],
         'categories_id'=>$validation ['categories_id'],

      ]);
            return redirect()->route('menus.index')
            ->with("success","Menu created successfully");
    }


    /**
     * Display the specified resource.
     */
    public function show(menu $menu)
    {
        return view('admin.pages.menus.show', compact('menu'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(menu $menu)
    {
        $categories = Category::get();
        return view('admin.pages.menus.update', compact('menu','categories'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate(([
            'name' =>['required'],
            'description' =>['required'],
            'image' => ['sometimes', 'image','mimes:png,jpg,jpeg','mimetypes:image/png,image/jpeg'],
            'price'=>['required'],
            'categories_id'=>['required','numeric']

              ]));
          $menu =menu::findorfail($id);
          if($request->hasFile('image')){

          $ext = $request->file('image')->getClientOriginalExtension();
          $newName = "menu" . time() .rand(100,100000) . "." . $ext;
          $path =public_path("images/slider/". $menu->image);
          if(file_exists($path)){
            unlink($path);
          }
          $request->file("image")->move(public_path("images/menu"),$newName);

        }
          $menu->update([
              'name'=>$validation ['name'],
              'description'=>$validation ['description'],
              'image'=>$newName ?? $menu->image,
              'price'=>$validation ['price'],
              'categories_id'=>$validation ['categories_id'],


          ]);
                return redirect()->route('menus.index')
                ->with("success","menu updated successfully");



    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(menu $menu)
    {
        $menu->delete();
        return redirect()->route('menus.index');
    }
}

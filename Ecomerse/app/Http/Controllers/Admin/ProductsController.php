<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\categories;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = product::paginate(5);
        return view('admin.pages.products.index',compact('products'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {
        $categories = categories::get();
        return view('admin.pages.products.create',compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Validator::make($data, [

            'title' =>['required'],
            'image' => ['required', 'image','mimes:png,jpg,jpeg','mimetypes:image/png,image/jpeg'],
            'author'=>['required'],
            'page_number'=>['required'],
            'price'=>['required'],
            'discount'=>['required'],
            'priceafterdiscount'=>['required'],
            'count'=>['required'],
         ])->validate();
         $path = $request->file('image')->store('public');
         $path = str_replace('public', 'storage', $path);
         $data['image'] = $path;
         product::create($data);
         return redirect()->route('products.index');



    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        return view('admin.pages.products.show', compact('product'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        $categories = categories::get();
        return view('admin.pages.products.update', compact('product','categories'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product)
    {

        $product->title = $request->title;
        $product->image = $request->image;
        $product->author = $request->author;
        $product->page_number = $request->page_number;
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->priceafterdiscount = $request->priceafterdiscount;
        $product->count = $request->count;

        $product->save();

        return redirect()->route('products.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}

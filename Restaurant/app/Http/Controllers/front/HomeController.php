<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\Menu;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $menus = Menu::get();
        $galleries = Gallery::get();
        $categories = Category::get();
        $sliders = Slider::get();
        return view('front.pages.home.index',compact('menus','categories','galleries','sliders'));
    }



    public function viewcategory($name){

        if(Category::where('name',$name)->exists()){

           $category = Category::where('name',$name)->first();

           $menus = Menu::where('categories_id',$category->id)->get();

           return view('front.pages.home.menus',compact('menus','category'));

        }else{
            return redirect('/');
        }



    }

    public function search(request $request){

        $search = Product ::where('title','like','%' .$request->input('search') . '%')->get();
        return view("front.pages.shop.search",['products'=>$search]);

    }
}

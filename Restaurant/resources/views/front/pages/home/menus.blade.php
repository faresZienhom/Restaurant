@extends('front.layout.master')
@section('title',"menus Page")

@section('content')



<!-- Page Title -->
<section class="page-title" style="background-image: url({{asset("front")}}/assets/images/background/11.jpg)">
    <div class="auto-container">
        <h1>menus </h1>
        <ul class="bread-crumb clearfix">
            <li><a href="/">Home</a></li>
        </ul>
    </div>
</section>

<div class="sec-title centered">


<h2>{{$category->name }}</h2>
</div>
<div class="py-5">
    <div class="conatiner">
        <div class="row">


        <div class="sec-title centered">
        </div>

        @foreach ($menus as $menu)

        <div class="col-3">

        <div class="card" style="width: 18rem;">
			<img src="{{ asset ( "images/menu/" .$menu->image) }}" width="70px" height="200px" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $menu->name }}</h5>
              <p class="card-text">{{ $menu->description }}</p>
              <h5 class="card-title">{{ $menu->price }}</h5>

              <a href="{{route('single.product.index', $menu->id)}}" class="theme-btn btn-style-five"><span
                class="txt">Order Now</span></a>
           </div>
          </div>
        </div>
 @endforeach
        </div>
    </div>
</div>



@endsection


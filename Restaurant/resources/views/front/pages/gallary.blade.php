@extends('front.layout.master')
@section('title',"Gallary Page")

@section('content')


<!-- Page Title -->
<section class="page-title" style="background-image: url({{asset("front")}}/assets/images/background/11.jpg)">
    <div class="auto-container">
        <h1>Gallery</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="/">Home</a></li>
            <li>Gallery</li>
        </ul>
    </div>
</section>
<!-- End Page Title -->

<!-- Gallery Page Section -->
<section class="gallery-page-section">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Gallery Block Two -->
            @foreach ($galleries as $gallery)

            <div class="gallery-block-two col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image">
                        <img src="{{ asset ( "images/gallery/" .$gallery->image) }}" alt="">
                        <!-- Overlay Box -->
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <a href="{{asset("front")}}/assets/images/gallery/6.jpg" data-fancybox="gallery" data-caption=""
                                    class="link"><span class="icon flaticon-expand"></span></a>
                                <h5><a href="#">People tast food</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endforeach

        </div>
    </div>
</section>
<!-- End Gallery Page Section -->

@endsection


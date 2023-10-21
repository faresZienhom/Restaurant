@extends('front.layout.master')
@section('title',"menus Page")

@section('content')


<!-- Page Title -->
<section class="page-title" style="background-image: url({{asset("front")}}/assets/images/background/11.jpg)">
    <div class="auto-container">
        <h1>Product Details</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="/">Home</a></li>
            <li>Product Details</li>
        </ul>
    </div>
</section>
<!-- End Page Title -->

<!--Shop Single Section-->
<section class="shop-single-section">
    <div class="auto-container">

        <div class="shop-single">
            <div class="product-details">

                @if(session()->has('success'))
                <div class=" alert alert-success">
                 {{ session()->get('success') }}
                </div>
                @endif

                              <!--Basic Details-->
                <div class="basic-details">
                    <div class="row clearfix">
                        <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                    <figure class="image-box"><a href="assets/images/resource/products/11.jpg"
                                            class="lightbox-image" title="Image Caption Here">
                                    <img src="{{ asset ( "images/menu/" .$menu->image) }}" alt="">
                                                </a></figure>
                                </div>
                        <div class="info-column col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <h2>{{ $menu->name }}</h2>
                                <div class="text">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                                    odit aut fugit, sed quia consequ untur magni dolores eos qui ratione
                                    voluptatem sequi nesciunt. Neque porro quisquam est,</div>
                                <div class="price">Price : <span>{{ $menu->price }} $</span></div>

                                <div class="other-options clearfix">


                                    <form action="{{ route('cart.store', $menu->id) }}" method="post">
                                        @csrf
                                        <div class="item-quantity"><label class="field-label">Quantity
                                            :</label><input class="quantity-spinner" type="number" value="2"
                                            name="quantity"></div>

                                        <button type="submit" class="theme-btn btn-style-five"><span >Add
                                            to cart</span></button>
                                        </form>
                                    </div>
                                    <br>
                                        <form action="{{ route('cart.addToFav', $menu->id) }}" method="post">
                                          @csrf
                                          <button type="submit" class="theme-btn btn-style-five"><span >Add
                                            to favourite</span></button>
                                        </form>
                            </div>
                        </div>
                <!--Basic Details-->

                <!--Product Info Tabs-->
                <div class="product-info-tabs">
                    <!--Product Tabs-->
                    <div class="prod-tabs tabs-box">

                        <!--Tab Btns-->
                        <ul class="tab-btns tab-buttons clearfix">
                            <li data-tab="#prod-details" class="tab-btn active-btn">Descripton</li>
                            <li data-tab="#prod-spec" class="tab-btn">Specification</li>
                        </ul>

                        <!--Tabs Container-->
                        <div class="tabs-content">

                            <!--Tab / Active Tab-->
                            <div class="tab active-tab" id="prod-details">
                                <div class="content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                        velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                        deserunt mollit anim id est laborum consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                        minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                                        sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                        mollit anim id est laborum</p>
                                </div>
                            </div>

                            <!--Tab-->
                            <div class="tab" id="prod-spec">
                                <div class="content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                        velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                </div>
                            </div>
                                </div>

                                <!-- Comment Form -->

                        </div>
                    </div>

                </div>
                <!--End Product Info Tabs-->

            </div>
        </div>

    </div>
</section>
<!--End Shop Single Section-->





@endsection

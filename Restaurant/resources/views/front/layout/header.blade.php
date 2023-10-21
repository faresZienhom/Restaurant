<header class="main-header">
    <!--Header Top-->
    <div class="header-top" style="background-color:#f2e39c; color:black">
        <div class="auto-container clearfix">
            <div class="top-left">
                <!-- Info List -->
                <ul class="info-list">

                    <li><a href="mailto:info@abc.co.in" style="color: black"><span class="icon far fa-envelope"></span>
                            info@abc.co.in</a></li>
                </ul>
            </div>


            <div class="top-right clearfix">


                <ul class="social-box">
                    <li><a href="#" style="color: black"><span class="fa fa-user-alt"></span></a></li>
                </ul>

                <!--Social Box-->
                <div class="option-list">

                    <div class="cart-btn">
                        <a href="{{ route('shoping.index') }}" class="icon flaticon-shopping-cart" style="color: black"><span
                                class="total-cart" style="background-color: #a40301;color:white"></span></a>
                    </div>

                    <!-- Search Btn -->

                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header Upper -->
    <div class="header-upper">
        <div class="inner-container">
            <div class="auto-container clearfix">
                <!--Info-->
                <div class="logo-outer">
                    <div class="logo" style="margin-top: -20px;"><a href="/"><img src="{{asset("front")}}/assets/images/logo-02.png" alt=""
                                title=""></a></div>
                </div>

                <!--Nav Box-->
                <div class="nav-outer clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="navbar-header">
                            <!-- Togg le Button -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon flaticon-menu"></span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">



                                <li><a href="/">Home</a></li>
                                <li><a href="/viewgallery">Gallery</a></li>
                                <li class="dropdown"><a href="">User</a>
                                    <ul>
                                        <li><a href="/login">Login</a></li>
                                        <li><a href="/register">Register</a></li>
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Logout</button>
                                        </form>
                                    </ul>
                                </li>

                                <li><a href="/about">About Us</a></li>
                                @auth

                                <li><a href="/contact">Contact</a></li>
                                <li><a href="/viewreservation">Reservation</a></li>

                                <li class="dropdown"><a href="">Acount</a>
                                    <ul>
                                        @if(auth()->user()->type == 'admin')

                                        <li><a href="/dashboard">Control Panal</a></li>
                                        @endif

                                        <li><a href="/favourites">Favourites</a></li>
                                    </ul>
                                </li>
                                @endauth







                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->

                    <div class="outer-box">
                        <div class="order">
                            Order Now
                            <span><a href="tel:1800-123-4567">1800 123 4567</a></span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <!--Sticky Header-->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="/" class="img-responsive"><img src="{{asset("front")}}/assets/images/logo-02.png" alt=""
                        title="" height="90" width="90" style="margin-top: -10px;"></a>
            </div>

            <!--Right Col-->
            <div class="right-col pull-right">
                <!-- Main Menu -->
                <nav class="main-menu navbar-expand-md">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                        <ul class="navigation clearfix">

                            <li><a href="/">Home</a></li>

                            <li><a href="/viewgallery">Gallery</a></li>

                            <li class="dropdown"><a href="#">User</a>
                                <ul>
                                    <li><a href="/login">Login</a></li>
                                    <li><a href="/register">Register</a></li>
                                </ul>
                            </li>
                            <li><a href="/about">About Us</a></li>
                            <li><a href="/contact">Contact</a></li>

                        </ul>
                    </div>
                </nav><!-- Main Menu End-->
            </div>

        </div>
    </div>
    <!--End Sticky Header-->

</header>

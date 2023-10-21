@extends('front.layout.master')
@section('title',"Contact Page")

@section('content')

<!-- Contact Page Title -->
<section class="contact-page-title" style="background-image: url({{asset("front")}}/assets/images/background/17.jpg)">
    <div class="auto-container">
        <h1>We are available <br> in your city with tasty food</h1>
    </div>
</section>
<!-- End Contact Page Title -->

<!-- Contact Page Section -->
<section class="contact-page-section">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Form Column -->
            <div class="form-column col-lg-8 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="title-box">
                        <h3>We Love To Hear From You</h3>
                        <div class="text">If it's not too much trouble informed us regarding whether you have an
                            inquiry, need to leave a remark, or might want additional data about Advotis</div>
                    </div>
                    @if(session()->has('success'))
                    <div class=" alert alert-success">
                       {{ session()->get('success') }}
                   </div>
                    @endif
                                   <!-- Contact Form -->
                    <div class="contact-form">
                        <form class="contact__form" action="{{ route('contact.store') }}" method="post">
                            @csrf

                            <div class="row clearfix">

                                <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                    <input type="text" name="name" value="" placeholder="Name" >
                                </div>
                                @error('name')
                                <div class=" alert alert-danger">
                                         {{ $message }}
                                </div>

                                @enderror

                                <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                    <input type="text" name="phone" value="" placeholder="phone" >
                                </div>
                                @error('phone')
                                <div class=" alert alert-danger">
                                         {{ $message }}
                                </div>

                                @enderror


                                <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                    <input type="email" name="email" value="" placeholder="Email" >
                                </div>
                                @error('email')
                                <div class=" alert alert-danger">
                                         {{ $message }}
                                </div>

                                @enderror


                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <input type="text" name="subject" value="" placeholder="Subject" >
                                </div>
                                @error('subject')
                                <div class=" alert alert-danger">
                                         {{ $message }}
                                </div>

                                @enderror


                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <textarea type="text" name="message" value="" placeholder="Message"></textarea>
                                </div>
                                @error('message')
                                <div class=" alert alert-danger">
                                         {{ $message }}
                                </div>

                                @enderror


                                <button type="submit" class="btn btn-primary">Send</button>
                            </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

            <!-- Info Column -->
            <div class="info-column -collg-4 col-md-12 col-sm-12">
                <div class="inner-column">
                    <h3>Our Office Address</h3>
                    <ul>
                        <li><strong>Main Restaurant:</strong>587, Dartmouthi Street, Boston, Massachusetts 0658,
                            PO Box 16122 United States</li>
                        <li><strong>Branch, Raurance Road:</strong>357, West Victoria, Darbaians, Collinsicious
                            0658, PO Box 16578 London</li>
                        <li><strong>Have any querry:</strong>Call us on : (1800) 456 7890</li>
                    </ul>
                </div>
            </div>

        </div>

    </div>
</section>
<!--End Faq Section-->

<!-- Map Section -->
<section class="map-section">
    <!-- Map Boxed -->
    <div class="map-boxed">
        <!--Map Outer-->
        <div class="map-outer">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d805184.6331292129!2d144.49266890254142!3d-37.97123689954809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2s!4v1574408946759!5m2!1sen!2s"
                allowfullscreen=""></iframe>
        </div>
    </div>
</section>
<!-- End Map Section -->
@endsection

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<!--Search Popup-->
<div id="search-popup" class="search-popup">
    <div class="close-search theme-btn"><span class="fas fa-window-close"></span></div>
    <div class="popup-inner">
        <div class="overlay-layer"></div>
        <div class="search-form">
            <form method="post" action="http://designarc.biz/demos/wengdo/index.html">
                <div class="form-group">
                    <fieldset>
                        <input type="search" class="form-control" name="search-input" value=""
                            placeholder="Search Here" required>
                        <input type="submit" value="Search Now!" class="theme-btn">
                    </fieldset>
                </div>
            </form>

            <br>
            <h3>Recent Search Keywords</h3>
            <ul class="recent-searches">
                <li><a href="#">Cake</a></li>
                <li><a href="#">Chocolate</a></li>
                <li><a href="#">Strawberry</a></li>
                <li><a href="#">Vanila</a></li>
                <li><a href="#">Mango Icecream</a></li>
            </ul>

        </div>

    </div>
</div>

<!--Scroll to top-->
<script src="{{asset("front")}}/assets/js/jquery.js"></script>
<script src="{{asset("front")}}/assets/js/popper.min.js"></script>
<script src="{{asset("front")}}/assets/js/jquery-ui.js"></script>
<script src="{{asset("front")}}/assets/js/bootstrap.min.js"></script>
<script src="{{asset("front")}}/assets/js/jquery.fancybox.js"></script>
<script src="{{asset("front")}}/assets/js/owl.js"></script>
<script src="{{asset("front")}}/assets/js/wow.js"></script>
<script src="{{asset("front")}}/assets/js/validate.js"></script>
<script src="{{asset("front")}}/assets/js/appear.js"></script>
<script src="{{asset("front")}}/assets/js/script.js"></script>

</body>



</html>

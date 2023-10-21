@extends('front.layout.master')
@section('title',"About Page")

@section('content')


<!-- Page Title -->
<section class="page-title" style="background-image: url({{asset("front")}}/assets/images/background/11.jpg)">
    <div class="auto-container">
        <h1>About Us</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="/">Home</a></li>
            <li>About Us</li>
        </ul>
    </div>
</section>
<!-- End Page Title -->

<!-- About Section Two -->
<section class="about-section-two">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Content Column -->
            <div class="content-column col-lg-7 col-md-12 col-sm-12">
                <div class="inner-column">
                    <h2>Some Words About Us <br> & Our Fast Food</h2>
                    <div class="text">
                        <p>Leverage agile frameworks to provide a robust synopsis for high level overviews.
                            Iterative approaches to corporate strategy foster collaborative thinking to further
                            the overall value proposition. Organically grow the holistic world view of
                            disruptive innovation via workplace diversity and empowerment.</p>
                        <p>Bring to the table win-win survival strategies to ensure proactive domination. At the
                            end of the day, going forward, a new normal that has evolved from generation X is on
                            the runway heading towards a streamlined cloud solution. User generated content in
                            real-time will have multiple touchpoints for offshoring. strategies to ensure
                            proactive domination. At the end of the day, going forward, a new normal that has
                            evolved from generation X is on the runway heading towards a streamlined cloud
                            solution</p>
                    </div>
                </div>
            </div>

            <!-- Images Column -->
            <div class="images-column col-lg-5 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="image">
                        <img src="{{asset("front")}}/assets/images/resource/about-1.jpg" alt="" />
                    </div>
                    <div class="image-two">
                        <img src="{{asset("front")}}/assets/images/resource/about-2.jpg" alt="" />
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End About Section Two -->


<!-- Testimonial Section Two -->
<section class="testimonial-section-two" style="background-image:url({{asset("front")}}/assets/images/background/13.jpg)">
    <div class="auto-container">
        <div class="inner-container">
            <div class="sec-title light">
                <h2>What our Client Says</h2>
            </div>
            <div class="single-item-carousel owl-carousel owl-theme">

                <div class="testimonial-block-two">
                    <div class="inner-box">
                        <div class="image-box">
                            <div class="image"><img src="{{asset("front")}}/assets/images/resource/author-2.jpg" alt="" /></div>
                        </div>
                        <div class="text">Osed quia consequuntur magni dolores eos qui ratione voluptatem sequi
                            nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                            consectetur, adipisci sed quia non numquam qui ratione voluptatem sequi nesciunt.
                            Neque porro quisquam est.</div>
                        <div class="quote-icon">
                            <span class="icon fa fa-quote-left"></span>
                        </div>
                        <div class="author">- Robert joe</div>
                    </div>
                </div>

                <div class="testimonial-block-two">
                    <div class="inner-box">
                        <div class="image-box">
                            <div class="image"><img src="{{asset("front")}}/assets/images/resource/author-2.jpg" alt="" /></div>
                        </div>
                        <div class="text">Osed quia consequuntur magni dolores eos qui ratione voluptatem sequi
                            nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                            consectetur, adipisci sed quia non numquam qui ratione voluptatem sequi nesciunt.
                            Neque porro quisquam est.</div>
                        <div class="quote-icon">
                            <span class="icon fa fa-quote-left"></span>
                        </div>
                        <div class="author">- Robert joe</div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- End Testimonial Section Two -->

<!-- Services Section -->
<section class="services-section style-two">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Service Block -->
            <div class="service-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-box">
                        <img src="{{asset("front")}}/assets/images/resource/service-1.png" alt="" />
                    </div>
                    <h6>Free shipping on <br> first order</h6>
                    <div class="text">Sign up for updates and <br> get free shipping</div>
                </div>
            </div>

            <!-- Service Block -->
            <div class="service-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-box">
                        <img src="{{asset("front")}}/assets/images/resource/service-2.png" alt="" />
                    </div>
                    <h6>Best Taste <br> Guaranttee</h6>
                    <div class="text">We use best ingredients to <br> cook the taste food.</div>
                </div>
            </div>

            <!-- Service Block -->
            <div class="service-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-box">
                        <img src="{{asset("front")}}/assets/images/resource/service-3.png" alt="" />
                    </div>
                    <h6>Variety of <br> Dishes</h6>
                    <div class="text">We give variety of dishes, <br> deserts, and drinks</div>
                </div>
            </div>

            <!-- Service Block -->
            <div class="service-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-box">
                        <img src="{{asset("front")}}/assets/images/resource/service-4.png" alt="" />
                    </div>
                    <h6>25 Minites <br> Delivery</h6>
                    <div class="text">We deliver your food at <br> your dooe that you order</div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Services Section -->
@endsection

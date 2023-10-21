@include('front.layout.head')
<body>

	<div class="page-wrapper">

		<!-- Preloader -->
		<div class="preloader"></div>
        @include('front.layout.header')

		<!-- End Main Header -->

		<!--================Slider Area =================-->
        @include('front.layout.slider')
		<!--================End Slider Area =================-->

		<!-- Spicy Section -->

		<!-- End Spicy Section -->

		<!-- Products Section -->
		<section class="products-section">
			<div class="auto-container">


				<!-- Sec Title -->
				<div class="sec-title centered">
					<h2>Our Menus</h2>
				</div>

				<!-- MixitUp Galery -->
				<div class="mixitup-gallery">

					<!--Filter-->
					<div class="filters clearfix">
						<ul class="filter-tabs filter-btns clearfix">
							<li class="active filter" data-role="button" data-filter="all">All</li>
                            @foreach ($categories as $category)
                            <a href="{{ url('view-category/' .$category->name) }}" >
							<li class="filter" data-role="button" data-filter="">{{ $category->name }}</li>
                            </a>
                            @endforeach
						</ul>
					</div>

					<div class="filter-list row clearfix">

                        @isset($menus)
                        @forelse ($menus as $menu)
						<!-- Products Block -->
						<div class="product-block all mix salad fest wraps fries col-lg-3 col-md-6 col-sm-12">
							<div class="inner-box">
                                <a href="{{route('single.product.index', $menu->id)}}">

								<figure class="image-box">
									<img src="{{ asset ( "images/menu/" .$menu->image) }}" alt="">
								</figure>
								<div class="lower-content">

									<h4><a href="{{route('single.product.index', $menu->id)}}">{{ $menu->name }}</a></h4>
									<div class="text">{{ $menu->description }}</div>
									<div class="price">${{ $menu->price }}</div>
									<div class="lower-box">
										<a href="{{route('single.product.index', $menu->id)}}" class="theme-btn btn-style-five"><span
												class="txt">Order Now</span></a>
									</div>

                            </div>
                            </div>
                        </div>


                          @empty
                          nothing
                 @endforelse
                @endisset




			</div>
		</section>
		<!-- Delivery Section -->



		<!-- Services Section -->
		<section class="services-section">
			<!-- Side Image -->

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

			<!-- Newsletter Section -->
			<div class="newsletter-section">
				<div class="auto-container">
					<div class="inner-container">

						<div class="row clearfix">

							<!-- Title Column -->
							<div class="title-column col-lg-6 col-md-12 col-sm-12">
								<div class="inner-column">
									<h2>Subscribe to newsletter</h2>
									<div class="text">Get weekly offer and discounts</div>
								</div>
							</div>

							<!-- Form Column -->
							<div class="form-column col-lg-6 col-md-12 col-sm-12">
								<div class="inner-column">
									<!--Emailed Form-->
									<div class="emailed-form">
										<form method="post" action="http://designarc.biz/demos/wengdo/contact.html">
											<div class="form-group">
												<input type="email" name="email" value=""
													placeholder="Enter your email address" required>
												<button type="submit" class="theme-btn">Subscribe</button>
											</div>
										</form>
									</div>
								</div>
							</div>

						</div>

					</div>
				</div>
			</div>
			<!-- End Newsletter Section -->

		</section>
		<!-- End Services Section -->

		<!-- Gallery Section -->
		<section class="gallery-section">
			<div class="outer-section">

                <div class="gallery-carousel owl-carousel owl-theme">


                    @foreach ($galleries as $gallery)
					<div class="gallery-block">
                        <div class="inner-box">
							<figure class="image-box">
                                <img src="{{ asset ( "images/gallery/" .$gallery->image) }}" alt="">
								<!-- Overlay Box -->
								<div class="overlay-box">
									<div class="overlay-inner">
                                        <div class="content">
                                            <a href="{{asset("front")}}/assets/images/gallery/1.jpg" data-fancybox="gallery-1"
                                            data-caption="" class="link"><span
                                            class="icon flaticon-expand"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>
              @endforeach


				</div>

			</div>
		</section>
		<!-- End Gallery Section -->

		<!--Main Footer-->
        @include('front.layout.footer')

	</div>
	<!--End pagewrapper-->

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
	<script src="{{asset("front")}}/assets/js/parallax.min.js"></script>
	<script src="{{asset("front")}}/assets/js/popper.min.js"></script>
	<script src="{{asset("front")}}/assets/js/jquery-ui.js"></script>
	<script src="{{asset("front")}}/assets/js/bootstrap.min.js"></script>

	<!-- Rev slider js -->
	<script src="{{asset("front")}}/assets/vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
	<script src="{{asset("front")}}/assets/vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
	<script src="{{asset("front")}}/assets/vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
	<script src="{{asset("front")}}/assets/vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
	<script src="{{asset("front")}}/assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script src="{{asset("front")}}/assets/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script src="{{asset("front")}}/assets/vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>

	<script src="{{asset("front")}}/assets/js/jquery.fancybox.js"></script>
	<script src="{{asset("front")}}/assets/js/owl.js"></script>
	<script src="{{asset("front")}}/assets/js/wow.js"></script>
	<script src="{{asset("front")}}/assets/js/mixitup.js"></script>
	<script src="{{asset("front")}}/assets/js/appear.js"></script>
	<script src="{{asset("front")}}/assets/js/script.js"></script>

</body>
</html>

@include('front.layout.head')
<!-- Header Content Start -->
  <div>
    <div class="header-container fixed-top border-bottom">
        @include('front.layout.header')
        @include('front.layout.nav')
        @include('front.layout.category-sidbar')
        @include('front.layout.cart-sidbar')
    </div>

    </div>

@yield('content')

@include('front.layout.footer')

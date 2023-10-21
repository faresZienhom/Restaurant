@include('front.layout.head')
<!-- Header Content Start -->
<body>
<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>
         @include('front.layout.header')




         @yield('content')

         @include('front.layout.footer')
        </div>
        @include('front.layout.footer-script')


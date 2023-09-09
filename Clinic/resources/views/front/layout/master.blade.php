@include('front.layout.header')
  <div> 
       <div class="page-wrapper">
         @include('front.layout.nav')


    </div>


@yield('content')
  </div>
@include('front.layout.footer')

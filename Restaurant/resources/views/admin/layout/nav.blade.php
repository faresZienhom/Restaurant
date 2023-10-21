<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="" class="nav-link">Home</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link">Contact</a>
    </li>

    <ul class="nav">
        <li class="">
            <div class="dropdown  nav-itemd-none d-md-flex">
                <a href="#" class="d-flex  nav-item nav-link pl-0 country-flag1" data-toggle="dropdown"
                   aria-expanded="false">
                    @if (App::getLocale() == 'ar')
                        <span class="avatar country-Flag mr-0 align-self-center bg-transparent"><img
                                src="{{URL::asset('admin/dist/img/flags/egypt_flag.jpg')}}"width="30" height="30"alt="img"></span>
                        <strong
                            class="mr-2 ml-2 my-auto">{{ LaravelLocalization::getCurrentLocaleName() }}</strong>
                    @else
                        <span class="avatar country-Flag mr-0 align-self-center bg-transparent"><img
                                src="{{URL::asset('admin/dist/img/flags/us_flag.jpg')}}" width="30" height="30" alt="img"></span>
                        <strong
                            class="mr-2 ml-2 my-auto">{{ LaravelLocalization::getCurrentLocaleName() }}</strong>
                    @endif
                    <div class="my-auto">
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-left dropdown-menu-arrow" x-placement="bottom-end">
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}"
                           href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                            @if($properties['native'] == "English")
                                <i class="flag-icon flag-icon-us"></i>
                            @elseif($properties['native'] == "العربية")
                                <i class="flag-icon flag-icon-eg"></i>
                            @endif
                            {{ $properties['native'] }}
                        </a>
                    @endforeach
                </div>
            </div>
        </li>
    </ul>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Navbar Search -->
    <li class="nav-item">
      <a class="nav-link" data-widget="navbar-search" href="#" role="button">
        <i class="fas fa-search"></i>
      </a>
      <div class="navbar-search-block">
        <form class="form-inline">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
              <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
        </form>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" data-widget="fullscreen" href="#" role="button">
        <i class="fas fa-expand-arrows-alt"></i>
      </a>
    </li>
  </ul>
</nav>

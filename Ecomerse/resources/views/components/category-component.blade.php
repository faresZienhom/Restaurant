<div>

  <ul class="nav__list list-unstyled">
    <li class="nav__link nav__side-link"><a href="/shop" class="py-3"> المنتجات</a></li>

    @foreach($categories as $category)

    <li class="nav__link nav__side-link"><a href="/shop" class="py-3">{{ $category->name }} </a></li>
    @endforeach
  </ul>
</div>

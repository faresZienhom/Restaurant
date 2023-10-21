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
<section class="cart-section">
    <div class="auto-container">

        <!--Cart Outer-->
        <div class="cart-outer">
            <div class="table-outer">
                <table class="cart-table">
                    <thead class="cart-header">
                        <tr>
                            <th>Name</th>
                            <th>Image</th>
                            <th class="price">Price</th>
                            <th>Action</th>

                        </tr>
                    </thead>

                    <tbody>
                        @forelse($favourites as $favourite)



                        <tr>
                            <td class="quantity">{{ $favourite->menu->name }}</td>
                            <td><img src="{{ asset ( "images/menu/" .$favourite->menu->image) }}" width="50" height="50"></td>

                            <td class="sub-total">${{ $favourite->menu->price }}</td>
                            <td>
                                <form action="{{route('fav.delete', $favourite->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="delete" class="btn btn-danger">
                                </form>
                            </td>

                        </tr>
                        @empty
                        <div class="alert alert-danger">There is no favourite </div>

                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>


<!--End Faq Section-->

@endsection

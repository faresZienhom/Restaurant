@extends('front.layout.master')
@section('title',"cart Page")

@section('content')


<!-- Page Title -->
<section class="page-title" style="background-image: url({{asset("front")}}/assets/images/background/11.jpg)">
    <div class="auto-container">
        <h1>Shoping Cart</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="/">Home</a></li>
            <li>Cart</li>
        </ul>
    </div>
</section>
<!-- End Page Title -->

<!--Cart Section-->
<section class="cart-section">
    <div class="auto-container">

        <!--Cart Outer-->
        <div class="cart-outer">
            <div class="table-outer">
                <table class="cart-table">
                    <thead class="cart-header">
                        <tr>
                            <th>Preview</th>
                            <th>Name</th>
                            <th class="price">Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Action;</th>
                        </tr>
                    </thead>

                    <tbody>
                        @php
                        $total = 0;
                        @endphp

                        @foreach ($orders as $order)

                        <tr>
                            <td><img src="{{ asset ( "images/menu/" .$order->image) }}" width="50" height="50"></td>
                            <td class="name">{{ $order->menu->name }}</td>

                            <td class="sub-total">${{ $order->price }}</td>
                            <td class="quantity">{{ $order->quantity }}</td>
                            <td class="quantity">{{ $order->total }} $</td>
                            <td>
                        <form action="{{route('carts.delete', $order->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="delete" class="btn btn-danger">
                        </form>
                    </td>

                </tr>
                @php

                $total += $order->price * $order->quantity;
                @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>


            <div class="order-options clearfix">
                <div class="pull-left">
                    <div class="apply-coupon clearfix">
                        <div class="form-group clearfix">
                            <input type="text" name="coupon-code" value="" placeholder="Coupon Code">
                        </div>
                        <div class="form-group clearfix">
                            <button type="button" class="theme-btn coupon-btn">Apply Coupon</button>
                        </div>
                    </div>
                </div>


            </div>
            <div class="row clearfix">

                <div class="column col-lg-7 col-md-12 col-sm-12"></div>

                <div class="column pull-right col-lg-5 col-md-12 col-sm-12">
                    <!--Totals Table-->
                    <ul class="totals-table">
                        <li>
                            <h3>Cart Totals</h3>
                        </li>
                        <li class="clearfix total"><span class="col">Total Price</span><span
                                class="col price">   {{ $total }} $
                                  </span></li>
                        <li class="text-right"><a href="/checkout"
                                class="theme-btn btn-style-five proceed-btn"><span class="txt">Proceed to
                                    Checkout</span></a></li>


                    </ul>
                </div>
            </div>
        </div>

    </div>
</section>
<!--End Cart Section-->



@endsection

@extends('front.layout.master')
@section('title',"Products Page")

@section('content')


<!-- Page Title -->
<section class="page-title" style="background-image: url({{asset("front")}}/assets/images/background/11.jpg)">
    <div class="auto-container">
        <h1>Checkout</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="/">Home</a></li>
            <li>Checkout</li>
        </ul>
    </div>
</section>
<!-- End Page Title -->

<!-- Checkout Page -->
<div class="checkout-page">
    <div class="auto-container">

        <!--Default Links-->
        <ul class="default-links">
            <li>Returning customer? <a href="/login" data-toggle="modal" data-target="#schedule-box">Click here to
                    login</a></li>
        </ul>

        <!--Billing Details-->
        <div class="billing-details">
            <div class="shop-form">
                @if(session()->has('success'))
                <div class=" alert alert-success">
                   {{ session()->get('success') }}
               </div>
                @endif

                <form action="{{ route('checkout.store') }}" method="POST" id="payment-form">
                    @csrf
                    <div class="row clearfix">
                        <div class="col-lg-7 col-md-12 col-sm-12">

                            <div class="sec-title">
                                <h2>Billing Details</h2>
                            </div>
                            <div class="billing-inner">
                                <div class="row clearfix">

                                    <!--Form Group-->
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label">Name <sup>*</sup></div>
                                        <input type="text" name="name" value="" placeholder=" Name">
                                    </div>


                                    <!--Form Group-->
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label"> Phone Namber </div>
                                        <input type="text" name="phone" value=""
                                            placeholder=" Phone Namber">
                                    </div>

                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label"> Email </div>
                                        <input type="text" name="email" value=""
                                            placeholder=" Email ">
                                    </div>

                                    <!--Form Group-->
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label">Address1 <sup>*</sup></div>
                                        <input type="text" name="Address1" value=""
                                            placeholder="Street Address">
                                    </div>

                                  <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                 <div class="field-label">Address2 <sup>*</sup></div>
                                        <input class="address-two" type="text" name="Address2" value=""
                                            placeholder="Apartment, Suit unit etc (optional)">
                                    </div>


                                    <!--Form Group-->
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label">Town / City <sup>*</sup></div>
                                        <input type="text" name="city" value="" placeholder="Town /City">
                                    </div>

                                    <!--Form Group-->
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label">State / Country <sup>*</sup> </div>
                                        <input type="text" name="country" value="" placeholder="State / Country">

                                    </div>


                                    <!--Form Group-->
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label">Postcode / Zip <sup>*</sup></div>
                                        <input type="text" name="pincode" value="" placeholder="Postcode / Zip">
                                    </div>




                                </div>
                            </div>
                        </div>

                        <div class="col-md-5" >
                            <div class="card">
                                <div class="card-body">
                            <div class="sec-title">
                                <h2>Your Order Details</h2>
                            </div>
                             <table class="table table-striped">

                                <thead class="cart-header">
                                    <tr>
                                        <th>Name</th>
                                        <th class="price">Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>

                                <tbody>
                         @foreach ($carts as $cart)

                                <tr>
                                            <td >{{ $cart->menu->name }}</td>
                                             <td >{{ $cart->price }} $</td>
                                             <td >{{ $cart->quantity }}</td>
                                            <td >{{ $cart->total }} $</td>
                                          </tr>


                    @endforeach

                                        </tbody>
                                    </table>



                                <!--Place Order-->
                                <div class="place-order">
                                    <!--Payment Options-->
                                    <div class="payment-options">
                                        <ul>
                                            <li>
                                                <div class="radio-option">
                                                    <input type="radio" name="payment-group" id="payment-2"
                                                        checked>
                                                    <label for="payment-2"><strong>Direct Bank Transfer</strong>
                                                        <span class="small-text">Make your payment directly into
                                                            our bank account. Please use your Order ID as the
                                                            payment reference. Your order won’t be shipped until
                                                            the funds have cleared in our account.</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-option">
                                                    <input type="radio" name="payment-group" id="payment-1">
                                                    <label for="payment-1"><strong>Cheque Payment</strong>
                                                        <span class="small-text">Make your payment directly into
                                                            our bank account. Please use your Order ID as the
                                                            payment reference. Your order won’t be shipped until
                                                            the funds have cleared in our account.</span>
                                                    </label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="radio-option">
                                                    <input type="radio" name="payment-group" id="payment-3">
                                                    <label for="payment-3"><strong>Paypal</strong><img
                                                            src="{{asset("front")}}/assets/images/resource/paypall.jpg" alt="" />
                                                        <a href="#" class="what-paypall">What is
                                                            PayPal?</a></label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <button type="submit" class="theme-btn btn-style-five"><span
                                            class="txt">Place Order</span></button>



                                </div>
                                <!--End Place Order-->

                            </div>
                            </div>
                        </div>
                </form>

            </div>

        </div>
        <!--End Billing Details-->
    </div>
</div>



@endsection

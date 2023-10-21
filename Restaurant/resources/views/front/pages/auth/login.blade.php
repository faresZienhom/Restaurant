@extends('front.layout.master')
@section('title',"Login Page")

@section('content')

<!-- Page Title -->
<section class="page-title" style="background-image: url({{asset("front")}}/assets/images/background/11.jpg)">
    <div class="auto-container">
        <h1>Registration</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="/">Home</a></li>
            <li>Login</li>
        </ul>
    </div>
</section>
<!-- End Page Title -->

<!-- Checkout Page -->
<div class="checkout-page">
    <div class="auto-container">

        <!--Default Links-->


        <!--Billing Details-->
        <div class="billing-details">
            <div class="shop-form">
                    <div class="row clearfix">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6 col-md-12 col-sm-12" style="border-style: solid; border-width: 1px; border-radius:5px;border-color: #c62904; padding:20px;">

                            <div class="sec-title">
                                <h2>Login Page</h2>
                            </div>


                            <div class="d-flex flex-column gap-3 account-form  mx-auto mt-5">
                                <form class="form" action="{{ route('login') }}" method="POST">
                                    @csrf

                                    <div class="mb-3">
                                        <label class="form-label required-label" for="email">Email</label>
                                        <input type="email" class="form-control" name="email" id="email" >
                                    </div>
                                    @error('email')
                                    <div class=" alert alert-danger">
                                             {{ $message }}
                                    </div>

                                    @enderror


                                    <div class="mb-3">
                                        <label class="form-label required-label" for="password">password</label>
                                        <input type="password" class="form-control" name="password" id="password" >
                                    </div>
                                    @error('password')
                                    <div class=" alert alert-danger">
                                             {{ $message }}
                                    </div>

                                    @enderror

                                    <button type="submit" class="btn btn-primary">Login</button>
                                </form>
                                <div class="d-flex justify-content-center gap-2 flex-column flex-lg-row flex-md-row flex-sm-column">
                                    <span>don't have an account?</span><a class="link" href="/register">create account</a>
                                </div>
                            </div>


                                </div>
                            </div>
                        </div>


                    </div>

            </div>

        </div>
        <!--End Billing Details-->
    </div>
</div>


@endsection

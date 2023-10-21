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
<section class="contact-page-section">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Form Column -->
            <div class="form-column col-lg-8 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="title-box">
                        <h3>We Love To Hear From You</h3>
                        <div class="text">If it's not too much trouble informed us regarding whether you have an
                            inquiry, need to leave a remark, or might want additional data about Advotis</div>
                    </div>
                    @if(session()->has('success'))
                    <div class=" alert alert-success">
                       {{ session()->get('success') }}
                   </div>
                    @endif

                    <!-- Contact Form -->
                    <div class="contact-form">
                        <form class="contact__form" action="{{ route('reservation.store') }}" method="post">
                            @csrf

                            <div class="row clearfix">

                                <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                    <input type="text" name="name" value="" placeholder="Name" >
                                </div>
                                @error('name')
                                <div class=" alert alert-danger">
                                         {{ $message }}
                                </div>

                                @enderror

                                <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                    <input type="text" name="phone" value="" placeholder="phone" >
                                </div>
                                @error('phone')
                                <div class=" alert alert-danger">
                                         {{ $message }}
                                </div>

                                @enderror


                                <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                    <input type="email" name="email" value="" placeholder="Email" >
                                </div>
                                @error('email')
                                <div class=" alert alert-danger">
                                         {{ $message }}
                                </div>

                                @enderror


                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control"  type="date" name="res_date" value="" placeholder="Res_date" >
                                </div>
                                @error('res_date')
                                <div class=" alert alert-danger">
                                         {{ $message }}
                                </div>

                                @enderror


                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" type="text" name="guest_number" value="" placeholder="guest_number">
                                </div>
                                @error('guest_number')
                                <div class=" alert alert-danger">
                                         {{ $message }}
                                </div>

                                @enderror

                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <select name="table_id">
                                        @forelse ($tables as $table)
                                        <option value="{{ $table->id }}">{{ $table->name }}</option>
                                        @empty
                                            <option value="0" disabled>Nothing </option>
                                        @endforelse
                                </select>
                            </div>

                            </div>
                                @error('table_id')
                                <div class=" alert alert-danger">
                                         {{ $message }}
                                </div>

                                @enderror


                                <button type="submit" class="btn btn-primary">Send</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>

            <!-- Info Column -->
            <div class="info-column -collg-4 col-md-12 col-sm-12">
                <div class="inner-column">
                    <h3>Our Office Address</h3>
                    <ul>
                        <li><strong>Main Restaurant:</strong>587, Dartmouthi Street, Boston, Massachusetts 0658,
                            PO Box 16122 United States</li>
                        <li><strong>Branch, Raurance Road:</strong>357, West Victoria, Darbaians, Collinsicious
                            0658, PO Box 16578 London</li>
                        <li><strong>Have any querry:</strong>Call us on : (1800) 456 7890</li>
                    </ul>
                </div>
            </div>

        </div>

    </div>
</section>
<!--End Faq Section-->

@endsection

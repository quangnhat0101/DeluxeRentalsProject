@extends('layout.layout2')
@section('title', 'AboutUS index')
@section('my content')
<div class="container">
    
    <h3 style="text-align: center">Our Service</h3>
    <div class="col-lg-12 col-md-12 all des" style="border: black solid">
        Our team is a mix of experience, creativeness, fresh, dynamic and innovating in car rental business, always ready to satisfy "customer needs" and "protect our corporate partners". Priority for us is "customer satisfaction". Our organization is constantly evolving by offering our customers 100% online services through "Deluxe Rental Car" with the aim of immediate and automated solutions in automotive industry.
    </div>
    <br>
    <div class="cat-news">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Car Quality</h2>
                    <div class="row cn-slider">
                        <div class="col-md-6">
                            <div class="cn-img">
                                <img src="{{ asset('uploads/home/car1.jpg') }}" />                                   
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="cn-img">
                                <img src="{{ asset('uploads/home/car2.jpg') }}" />                                   
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="cn-img">
                                <img src="{{ asset('uploads/home/car3.jpg') }}" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <h2>Service Quality</h2>
                    <div class="row cn-slider">
                        <div class="col-md-6">
                            <div class="cn-img">
                                <img src="{{ asset('uploads/home/CarQuality1.jpg') }}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="cn-img">
                                <img src="{{ asset('uploads/home/CarQuality2.jpg') }}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="cn-img">
                                <img src="{{ asset('uploads/home/CarQuality3.jpg') }}" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="cat-news">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Driver Quality</h2>
                    <div class="row cn-slider">
                        <div class="col-md-4">
                            <div class="cn-img">
                                <img src="{{ asset('uploads/home/Driver1.jpg') }}" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="cn-img">
                                <img src="{{ asset('uploads/home/driver2.png') }}" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="cn-img">
                                <img src="{{ asset('uploads/home/driver3.jpg') }}" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <h2>Staff Quality</h2>
                    <div class="row cn-slider">
                        <div class="col-md-4">
                            <div class="cn-img">
                                <img src="{{ asset('uploads/home/CusSer1.jpg') }}" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="cn-img">
                                <img src="{{ asset('uploads/home/CusSer2.jpg') }}" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="cn-img">
                                <img src="{{ asset('uploads/home/CusSer3.jpeg') }}" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="cat-news">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Customer Satisfaction</h2>
                    <div class="row cn-slider">
                        <div class="col-md-6">
                            <div class="cn-img">
                                <img src="{{ asset('uploads/home/CusSta1.jpg') }}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="cn-img">
                                <img src="{{ asset('uploads/home/CusSta2.jpg') }}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="cn-img">
                                <img src="{{ asset('uploads/home/CusSta3.jpg') }}" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <h2>Certificate</h2>
                    <div class="row cn-slider">
                        <div class="col-md-6">
                            <div class="cn-img">
                                <img src="{{ asset('uploads/home/CarCer3.jpg') }}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="cn-img">
                                <img src="{{ asset('uploads/home/CarCer2.jpg') }}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="cn-img">
                                <img src="{{ asset('uploads/home/CarCer1.jpg') }}" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>
<!-- CSS Libraries -->

<link href="{{ asset('lib/slick/slick.css') }}" rel="stylesheet">
<link href="{{ asset('lib/slick/slick-theme.css') }}" rel="stylesheet">


<!-- JavaScript Libraries -->

<script src="{{ asset('lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('lib/slick/slick.min.js') }}"></script>
<script src="js/main.js"></script>
@endsection
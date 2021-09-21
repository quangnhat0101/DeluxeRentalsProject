@extends('layout.layout2')
@section('title', 'AboutUS index')
@section('my content')

<section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>Our Services</h2>
          <h3>All your needs are catered <span>at Deluxe Rentals</span></h3>
          <p>It is our mission to provide you the most enjoyable and safe travels. All our services are designed to give you unforgettable experiences.</p>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="{{ asset('uploads/home/CarQuality.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>CAR QUALITY</h4>
              <p>Newest models and in best condition</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="{{ asset('uploads/home/ServiceQuality.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>SERIVCE QUALITY</h4>
              <p>Cater to all you needs</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="{{ asset('uploads/home/DriverQuality.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>DRIVER QUALITY</h4>
              <p>Professionals with years of experience</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="{{ asset('uploads/home/StaffQuality.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>STAFF QUALITY</h4>
              <p>Friendly and professionally trained</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="{{ asset('uploads/home/CustomerSatisfaction.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>CUSTOMER SATISFACTION</h4>
              <p>99% of positive feedback from our customers</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="{{ asset('uploads/home/Certificate.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>CERTIFICATE</h4>
              <p>Best company of 2020 by Ministry of Trasportation</p>
            </div>
          </div>

        </div>

      </div>
</section>

@endsection
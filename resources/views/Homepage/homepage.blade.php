@extends('layout.layout')
@section('title','Homepage')
@section('my content')
<!-- Intro image section -->
<section id="intro">
    <div class="intro-container">
      <h3>Welcome to <strong>Deluxe Rentals</strong></h3>
      <h1>Need to rent a car?</h1>
      <h2>We offer the newest models at the most competitive price</h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section>
  <!-- End Intro image section -->

  <!-- Intro section -->
  <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Introduction</h2>
          <h3>We are <span>Deluxe Rentals</span></h3>
          <p>A leading car rental company that provides services across all 63 cities and provinces of Vietnam </p>
        </div>

        <div class="row content">
            <div class="col-lg-6 pt-4 pt-lg-0">
                <p>
                  Deluxe Rentals was created in order to satisfy our customers' needs to have a safe and comfortable travel on newest car models.
                  At the same time providing reasonable pricing options that are affordable to everyones.
                  <br>
                  <br>
                  Even though the company has just been established for 1 year, with our professional services we have seen a sharp increase in rental demands.
                  We have also received capitals from many investors which allowed us to open our branches throughout the country. 
                  <br>
                  <br>
                  We will continue to deliver the best rental services as a gratitude to all the support we received.

                </p>               
            </div>

            <div class="col-lg-6">
                <p>
                  <i class="ri-check-double-line"></i> Using Deluxe Rentals services, you will feel like driving your own car, or having a private driver to pick you up whenever and wherever you want.
                  <br><br>
                  <i class="ri-check-double-line"></i> Don't hesitate, start using our service now and enjoy various promotions and discounts! <br><br>
                  <a href=" {{ url('booking') }} " class="btn-learn-more">Register and start booking!</a>
                </p>

            </div>
        </div>

      </div>
    </section>
    
 <!-- End Intro Section -->

 <section id="team" class="team">
      <div class="container">

        <div class="section-title">
          <h2>Management</h2>
          <h3>Our Hardworking <span>Team</span></h3>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Luu Quang Nhat</h4>
                <span>Chief Executive Officer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-2.jpeg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Nguyen Anh Duc</h4>
                <span>General Manager</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Nguyen Vo Minh Tuan</h4>
                <span>Chief Finance Officer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Hoang Anh Duc</h4>
                <span>Regional Manager</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->
 
@endsection
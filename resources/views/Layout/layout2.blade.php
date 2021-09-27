<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/DeluxeRentalsIcon_small.png')}}" rel="icon">
  <link href="{{asset('assets/img/DeluxeRentalsIcon_apple.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Tempo - v4.3.0
  * Template URL: https://bootstrapmade.com/tempo-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <title>@yield('title')</title>
</head>



<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <h6 class="logo"><a href="{{ url('homepage')  }}">Deluxe Rentals</a></h6>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link  active" href="{{ url('homepage') }}">Home</a></li>
          <li><a class="nav-link" href="{{ url('about') }}" >About</a></li>
          <li><a class="nav-link" href="{{ url('service') }}" >Services</a></li>
          @guest
          @else
          <li><a class="nav-link" href="{{ url('booking') }}" >Booking</a></li>
          @if( Auth::user()->name == "admin" )
          <li><a class="nav-link" href="{{ url('manage') }}" >Manage</a></li>
          @endif
          @endguest



          <li><a href="{{ url('contact') }}">Contact</a></li>
          @guest
          <li class="dropdown"><a href="#"><span>Login</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ url('login') }}">Login</a></li>
              <li><a href="{{ url('register') }}">Register</a></li>
            </ul>
          </li>

          @else
          <li class="dropdown"><a href="#"><span> Welcome <span style="color: aquamarine"> {{Auth::user()->name}}</span> </span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ url('myprofile') }}">My Profile</a></li>
              <li><a href="{{ url('logout') }}">Logout</a></li>
            </ul>
          </li>
          <li>
            <div class="cart-section"> <!-- Cart button-->

              <div class="dropdown" style="margin: 20px">
                  <button type="button" class="btn btn-danger" data-toggle="dropdown">
                      <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-dark">{{ count((array) session('cart')) }}</span>
                  </button>
                  <div class="dropdown-menu">
                      <div class="row total-header-section">
                          <div class="col-lg-5 col-sm-5 col-5">
                              <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                          </div>
                          <?php $total = 0 ?>
                          @foreach((array) session('cart') as $id => $details)
                              <?php $total += $details['CarPrice'] * $details['quantity'] ?>
                          @endforeach
                          <div class="col-lg-6 col-sm-6 col-6 total-section">
                              <p>Total: <span class="text-info">$ {{ $total }}</span></p>
                          </div>
                      </div>

                      <div style="padding-top: 15px">
                    @if(session('cart'))
                        @foreach(session('cart') as $id => $details)
                            <div class="row cart-detail">
                                <div class="col-lg-4 col-sm-4 col-4">
                                  <?php $destination = 'uploads/carlist/'.$details['CarPic'] ?>
                                  @if(File::exists($destination))
                                      <img src="{{ asset('uploads/carlist/'.$details['CarPic']) }}" style="width: 100%" />
                                  @else
                                      <img src="{{ $details['CarPic'] }}" style="width: 100%" />
                                  @endif
                                </div>
                                <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                    <span> {{ $details['CarBrand'] }} {{ $details['CarModel'] }} </span> <br>
                                     <span class="count">{{ $details['quantity'] }} days - </span>
                                     <span> ${{ $details['CarPrice']*$details['quantity'] }}</span>
                                </div>
                            </div>
                            <br>
                        @endforeach
                      @endif
                    </div>

                      <div class="row">

                          <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                            <div class="btn btn-danger text-center">
                              <a href="{{ url('cart') }}" class="text-center" >View your cart</a>
                            </div>
                          </div>
                      </div>
                  </div>
              </div>

            </div><!--Cart button-->
            
               
          </li><!--End cart button-->
          @endguest


        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

<!-- Intro image section -->
<section id="shortintro">
    <div class="shortintro-container">
    <h2>Deluxe Rentals</h2>
    <h1>Your experience is our inspiration</h1>

    </div>
  </section>
  <!-- End Intro image section -->

  @yield('my content')
    
  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Deluxe Rentals</h3>
            <p>
              02 Nguyen Hue Street, District 1 <br>
              Ho Chi Minh City<br>
              Vietnam <br><br>
              <strong>Phone:</strong> +84 028 666 888<br>
              <strong>Email:</strong> info@deluxerentals.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
          </div>

          <div class="col-lg-2 col-md-6 footer-links">

          </div>



          <div class="col-lg-4 col-md-6 footer-newsletter">
          <h4 style="text-align: right"> Useful Links</h4>
            <ul style="text-align: right; list-style-type: none">
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('homepage')}}">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('about') }}">About</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('service') }}">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('booking') }}">Booking</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('contact') }}">Contact</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>DeluxeRentals</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/tempo-free-onepage-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/">FPT Aptech T1.2010.E0 - Group 04</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>


</body>
@yield('script-section')

</html>
@extends('layout.layout2')
@section('title','Manage')
@section('my content')
<div class="container">
<section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Manage</h2>
          <!--<h3>We do offer awesome <span>Manage</span></h3>-->
          <h3>View and manage the database information</h3>
        </div> 

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-car"></i></div>
              <h4 class="title"><a href=" {{ URL('carindex') }} ">CARS</a></h4>
              <p class="description">Display the list of cars. <br> Create, Edit or Delete car information.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-run"></i></div>
              <h4 class="title"><a href="{{ URL('driverindex') }}">DRIVERS</a></h4>
              <p class="description">Display the list of drivers. <br> Create, Edit or Delete driver information.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-group"></i></div>
              <h4 class="title"><a href="{{ URL('staffindex') }}">STAFFS</a></h4>
              <p class="description">Display the list of staff. <br> Create, Edit or Delete staff information.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-cart-alt"></i></div>
              <h4 class="title"><a href="{{ URL('customerindex') }}">CUSTOMER</a></h4>
              <p class="description">Display the list of customers.</p>
            </div>
          </div>

        </div> <!--End row-->
        <br>
        <br>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-user-voice"></i></div>
              <h4 class="title"><a href="{{ URL('feedbackindex') }}">FEEDBACKS</a></h4>
              <p class="description">Display the list of feedbacks by customer.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="{{ URL('contractindex') }}">CONTRACTS</a></h4>
              <p class="description">Display the list of contract. <br> Change contract status.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-purchase-tag"></i></div>
              <h4 class="title"><a href="{{ URL('brandindex') }}">CAR BRANDS</a></h4>
              <p class="description">Display the list of car brand. <br> Create, Edit or Delete brand information.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-cog"></i></div>
              <h4 class="title"><a href="{{ URL('maintenanceindex') }}">MAINTENANCE</a></h4>
              <p class="description">Display car maintenance documents. <br> Create, Edit or Delete maintenance information.</p>
            </div>
          </div>



        </div> <!--End row-->

      </div>
    </section>
</div>
      
@endsection
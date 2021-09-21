@extends('layout.layout2')
@section('title', 'AboutUS index')
@section('my content')

    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          <h3>Learn More <span>About Us</span></h3>
        </div>

        <div class="row content">
            <div class="col-lg-6">
                <img src="{{ asset('uploads/home/about.jpg') }}" class="img-fluid" alt="">
            </div>

            <div class="col-lg-6 pt-4 pt-lg-0" style="text-align: justify">
                <h3>Deluxe Rentals Company</h3>
                <p">
                The company was established on August 1st, 2019 with founder Luu Quang Nhat and co-founders including Nguyen Anh Duc, 
                Nguyen Vo Minh Tuan and Hoang Anh Duc. Our company provides car rental service for customers who have requirement of travelling with private driver or by yourself. 
                When using our service, we ensure that customer will: 
                </p>
                <ul style="list-style-type: none">
                <li><i class="bi bi-check2-circle"></i> Having various car options from affordable to luxurious car base on your requirement.</li>
                <li><i class="bi bi-check2-circle"></i> Enjoy wonderful service by our friendly and professional staff.</li>
                <li><i class="bi bi-check2-circle"></i> Your car will always be in the best condition when delivered.</li>
                </ul>
                <p>
                Our team is a mix of experience, creativeness, fresh, dynamic and innovating in car rental business, 
                always ready to satisfy "customer needs" and "protect our corporate partners". Priority for us is "customer satisfaction".
                Our organization is constantly evolving by offering our customers 100% online services through "Deluxe Rental Car" 
                with the aim of immediate and automated solutions in automotive industry.
                </p>
            </div>
        </div>

      </div>
    </section><!-- End About Section -->
@endsection
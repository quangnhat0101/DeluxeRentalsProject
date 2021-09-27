@extends('layout.layout2')
@section('title','Booking')
@section('my content')

<div class="container" style="margin-top:10px; margin-bottom: 20px">
@if(session('status'))
            <h3 style="color:red; font-style: italic">{{session('status')}}</h3>
@endif
<section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h3>Book your <span>Favorite {{$car}}</span></h3>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <div class="filtercar">
              <a href="{{ url('booking') }}">All</a>
              @foreach($brandlist as $blist)
              <a href="{{ url('filtercar/'.$blist->BrandName) }}">{{$blist->BrandName}}</a>
              @endforeach

            </div>
          </div>
        </div> 

        <div class="row portfolio-container">
            @foreach($carlist as $clist)
            <div class="col-lg-4 col-md-6 portfolio-item">

            <?php $destination = 'uploads/carlist/'.$clist->CarPic ?>
            @if(File::exists($destination))
                <img src="{{ asset('uploads/carlist/'.$clist->CarPic) }}" class="img-fluid" alt="">
            @else
                <img src=" {{ $clist->CarPic }} " class="img-fluid" alt="">
            @endif

                <div class="portfolio-info">
                <h4>{{ $clist-> CarBrand}} {{ $clist-> CarModel}}</h4>
                <p>{{ $clist-> CarPlate}}</p>
                <a href=" {{ url('bookacar/'.$clist->CarID) }} " class="preview-link" title="Book this car">Book</a>
                
                </div>
            </div>
            @endforeach
        </div>

      </div>
    </section><!-- End Portfolio Section -->

</div>
 

@endsection
@extends('layout.layout2')
@section('title','Update Car Information')
@section('my content')

  <div class="container" style="margin-top: 100px; margin-bottom: 100px">
        @if(session('success'))
            <h6>{{session('success')}}</h6>
        @endif
        <h1>Update Car Information</h1>
        <a href="{{ url('carindex') }}">Return to index</a>
        <br>
        <br>
        <form method="post" action="{{ url('carupdate/'.$carlist->CarID) }}" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
                <label>Car Brand</label>
                <input type="text" class="form-control" name="txtBrand" value="{{ $carlist->CarBrand }}">
            </div>
            <div class="form-group">
                <label>Car Model</label>
                <input type="text" class="form-control" name="txtModel" value="{{ $carlist->CarModel }}">
            </div>
            <div class="form-group">
                <label>Car Plate</label>
                <input type="text" class="form-control" name="txtPlate" value="{{ $carlist->CarPlate }}">
            </div>
            <div class="form-group">
                <label>Car Price per day</label>
                <input type="number" class="form-control" name="txtPrice" value="{{ $carlist->CarPrice }}">
            </div>
            <div class="form-group">
                <label>Car Image</label>
                <input type="file" name="CarPic">
                <img src="{{ asset('uploads/carlist/'.$carlist->CarPic) }}" width="100px" height="70px" alt="CarImage">
                
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
</div>
    
@endsection 
@extends('Layout.layout2')
@section('title','EditCar')

@section('my content')

<div class="container" style="margin-top: 100px; margin-bottom: 100px">
        @if(session('status'))
            <h6>{{session('status')}}</h6>
        @endif
        <h1>Edit car</h1>
        <a href="{{ url('car/index') }}">Return to index</a>
        <br>
        <br>
        <form method="post" action="{{ url('car/updatecar/'.$carlist->CarID) }}" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
                <label>Car Brand</label>
                <input type="text" class="form-control" name="txtBrand" value="{{ $carlist->CarBrand }}">
            </div>
            <div class="form-group">
                <label>Car Type</label>
                <input type="text" class="form-control" name="txtType" value="{{ $carlist->CarType }}">
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
                <img src="{{ asset('uploads/carlist/'.$carlist->CarPic) }}" width="100px" height="70px" alt="CarImage">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
</div>
        
@endsection
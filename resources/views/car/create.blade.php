@extends('Layout.layout2')
@section('title','CreateCar')
@section('my content')

<div class="container" style="margin-top: 100px; margin-bottom: 100px">
        @if(session('success'))
            <h6>{{session('success')}}</h6>
        @endif
        <h1>NEW CAR INFORMATION</h1>
        <a href="{{ url('carindex') }}">Return to index</a>
        <br>
        <br>
        <form method="post" action="{{ url('carcreate') }}" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
                <label>Car Brand</label>
                <input type="text" class="form-control" name="txtBrand" placeholder="Enter car brand">
            </div>
            <div class="form-group">
                <label>Car Model</label>
                <input type="text" class="form-control" name="txtModel" placeholder="Enter car type">
            </div>
            <div class="form-group">
                <label>Car Plate</label>
                <input type="text" class="form-control" name="txtPlate" placeholder="Enter car plate">
            </div>
            <div class="form-group">
                <label>Car Price per day</label>
                <input type="number" class="form-control" name="txtPrice" placeholder="Enter car price">
            </div>
            <div class="form-group">
                <label>Car Image</label>
                <input type="file" class="form-control" name="CarPic">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</div>
        

@endsection
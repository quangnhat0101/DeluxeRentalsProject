@extends('layout.layout2')
@section('title','Booking')
@section('my content')

<div class="container" style="margin-top: 100px; margin-bottom: 100px">
@if(session('status'))
            <h3 style="color:red; font-style: italic">{{session('status')}}</h3>
@endif
<h1 style="text-align: center">BOOK YOUR FAVORITE CAR!</h1>
<br>
<br>
<table class="table table-bordered table-hover">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Car Brand</th>
            <th>Car Model</th>
            <th>Car Plate</th>
            <th>Car Price ($/day)</th>
            <th>Image</th>
            <th>Departure</th>
            <th>Arrival</th>
            <th>Function</th>

        </tr>
    </thead>    
    
    <tbody>
        @foreach($carlist as $list)
        <tr>
            <td>{{ $list -> CarID }}</td>
            <td>{{ $list -> CarBrand }}</td>
            <td>{{ $list -> CarModel }}</td>
            <td>{{ $list -> CarPlate }}</td>
            <td>$ {{ $list -> CarPrice }}</td>
            <!-- This is for real use -->
            <!-- <td>
                <img src="{{ asset('uploads/carlist/'.$list->CarPic) }}" width="130x" height="70px" alt="CarImage">
            </td> -->
            <!--This is image for testing after seeding-->
            <td>
                <img src="{{ $list->CarPic }}" width="130x" height="70px">
            </td>  
            <form method="get" action="{{ url('add-to-cart/'.$list->CarID) }}">         
            <td>
                <input type="date" name="departure" value="{{ old('departure') }}">
                <br>
                @if ($errors->has('departure'))
                    <span class="text-danger font-italic">{{ $errors->first('departure') }}</span>
                @endif  
            </td>
            <td>
                <input type="date" name="arrival" class="@error('arrival') is-invalid @enderror">
                <br>
                @if ($errors->has('arrival'))
                    <span class="text-danger font-italic">{{ $errors->first('arrival') }}</span>
                @endif  
            </td>
            <td>
                <button type="submit" class="btn btn-warning btn-sm">Add to cart</button>
            </td>
            </form>
        </tr>
        @endforeach
    </tbody>
    
</table> 

</div>
 

@endsection
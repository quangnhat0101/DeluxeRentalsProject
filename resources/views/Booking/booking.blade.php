@extends('layout.layout2')
@section('title','Booking')
@section('my content')

<div class="container" style="margin-top: 100px; margin-bottom: 100px">
<h1 style="text-align: center">BOOK YOUR FAVORITE CAR!</h1>
<br>
<br>
<table class="table table-bordered table-hover">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Car Brand</th>
            <th>Car Type</th>
            <th>Car Plate</th>
            <th>Car Price</th>
            <th>Image</th>
            <th>Function</th>

        </tr>
    </thead>    
    
    <tbody>
        @foreach($carlist as $list)
        <tr>
            <td>{{ $list -> CarID }}</td>
            <td>{{ $list -> CarBrand }}</td>
            <td>{{ $list -> CarType }}</td>
            <td>{{ $list -> CarPlate }}</td>
            <td>{{ $list -> CarPrice }}</td>
            <td>
                <img src="{{ asset('uploads/carlist/'.$list->CarPic) }}" width="130x" height="70px" alt="CarImage">
            </td>
            <td>
                <a href="" class="btn btn-warning btn-sm">Add to cart</a>
            </td>
        </tr>
        @endforeach
    </tbody>
    
</table> 

</div>
 

@endsection
@extends('layout.layout2')
@section('title','Book A Car')
@section('my content')

<div class="container" style="margin-top:100px; margin-bottom: 50px">
@if(session('status'))
            <h3 style="color:red; font-style: italic">{{session('status')}}</h3>
@endif
    <div class="row">
        <div class="col-6">
            @foreach($carlist as $list)
                <img src="{{ $list -> CarPic }}" alt="{{ $list->CarBrand}} {{ $list->CarModel}}" style="max-width: 100%">
            @endforeach
        </div>

        <div class="col-6">
                <h2 style="color: #e43c5c">CAR DETAILS</h2>
            @foreach($carlist as $list)
            <ul>
            
                <li> <span class="font-weight-bold">Car name:</span>  {{ $list -> CarBrand }} {{ $list -> CarModel }}</li>
                <li><span class="font-weight-bold">Car plate:</span> {{ $list -> CarPlate }}</li>
                <li><span class="font-weight-bold">Car price:</span> $ {{ $list -> CarPrice }} per day</li>
            </ul>
            
            <form method="get" action="{{ url('add-to-cart/'.$list->CarID) }}"> 
            <h6>Departure date</h6>                                
                <input type="date" name="departure" value="{{ old('departure') }}">
                <br>
                @if ($errors->has('departure'))
                    <span class="text-danger font-italic">{{ $errors->first('departure') }}</span>
                @endif  
            
            <br>
            <h6>Arrival date</h6>       
                <input type="date" name="arrival" value="{{ old('arrival') }}" >
                <br>
                @if ($errors->has('arrival'))
                    <span class="text-danger font-italic">{{ $errors->first('arrival') }}</span>
                @endif             
            <br>
            
                <button type="submit" class="btn btn-warning">Add to cart</button>
                <a class ="btn btn-dark" href="{{ url('booking') }}">Return to Car list</a>
            
            </form>
            @endforeach

        </div>
    </div>
</div>
 

@endsection
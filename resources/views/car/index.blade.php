@extends('layout.layout2')
@section('title','Car Index')
@section('my content')

<div class="container small-index text-center">
    <a href=" {{ url('carindex') }} " title="Car Index"><i class="bx bx-car"></i></a><span style="color: #e43c5c"> |</span>   
    <a href=" {{ url('driverindex') }} " title="Driver Index"><i class="bx bx-run"></i></a><span style="color: #e43c5c"> |</span>
    <a href=" {{ url('staffindex') }} " title="Staff Index"><i class="bx bx-group"></i></a><span style="color: #e43c5c"> |</span>
    <a href=" {{ url('customerindex') }} " title="Customer Index"><i class="bx bx-cart-alt"></i></a><span style="color: #e43c5c"> |</span>
    <a href=" {{ url('feedbackindex') }} " title="Feedback Index"><i class="bx bx-user-voice"></i></a><span style="color: #e43c5c"> |</span>
    <a href=" {{ url('contractindex') }} " title="Contract Index"><i class="bx bx-file"></i></a><span style="color: #e43c5c"> |</span>
    <a href=" {{ url('maintenanceindex') }} " title="Maintenance Index"><i class="bx bx-cog"></i></a><span style="color: #e43c5c"> |</span> 
    <a href=" {{ url('brandindex') }} " title="Brand Index"><i class="bx bx-purchase-tag"></i></a>           
</div>

<div class="container" style="margin-top: 70px; margin-bottom: 100px">
            @if(session('status'))
                <h3 style="color: red" >{{session('status')}}</h3>
            @endif

    <h1 style="text-align: center; color: #e43c5c">CAR INDEX</h1>
        <h3><a class="btn btn-danger" href="{{ url('/carcreate') }}">Add new car</a></h3>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr style="text-align: center">
                    <th>ID</th>
                    <th>Car Brand</th>
                    <th>Car Type</th>
                    <th>Car Plate</th>
                    <th>Car Price ($/day)</th>
                    <th>Image</th>
                    <th colspan=2>Function</th>

                </tr>
            </thead>    
            
            <tbody>
                @foreach($carlist as $list)
                <tr>
                    <td>CAR00{{ $list -> CarID }}</td>
                    <td>{{ $list -> CarBrand }}</td>
                    <td>{{ $list -> CarModel }}</td>
                    <td>{{ $list -> CarPlate }}</td>
                    <td>$ {{ $list -> CarPrice }}</td>
                   
                   <?php $destination = 'uploads/carlist/'.$list->CarPic ?>
                    @if(File::exists($destination))
                    <td>
                        <img src="{{ asset('uploads/carlist/'.$list->CarPic) }}" width="130x" height="70px" alt="CarImage">
                    </td> 

                    @else
                    <td>
                        <img src="{{ $list->CarPic }}" width="130x" height="70px" alt="CarImage">
                    </td> 
                    @endif
                    


                    
                    <td>
                        <a href="{{ url('carupdate/'.$list->CarID) }}" class="btn btn-dark btn-sm">Edit</a>
                    </td>
                    <td>
                        <a href="{{ url('cardelete/'.$list->CarID) }}" class="btn btn-danger btn-sm" 
                        onclick = "return confirm('Are you sure to delete data of car {{$list->CarPlate}}? ')">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            
        </table>
</div>

@endsection
        




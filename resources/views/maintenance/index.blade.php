@extends('layout.layout2')
@section('title', 'Maintenance List')
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

<div class="container  overflow-auto" style="margin-top: 70px; margin-bottom: 100px">
@if(session('status'))
                <h3 style="color: red" >{{session('status')}}</h3>
            @endif

<h1>List of Maintenance</h1>
    <h3><a href="{{ url('maintenancecreate') }}">Create new Maintenance</a></h3>
    <table class="table table-bordered">
        <thread class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Date</th>
                <th>Car Plate Number</th>
                <th>Comment</th>
                <th colspan=2>Function</th>

            </tr>
        </thread>    
        
        <tbody>
            @foreach($maintenancelist as $list)
            <tr>
                <td>{{ $list -> MaintenanceID }}</td>                
                <td>{{ $list -> MaintenanceDate }}</td>
                <td>{{ $list -> CarPlate }}</td>
                <td>{{ $list -> Comment }}</td>
                <td>
                    <a href="{{ url('maintenanceupdate/'.$list->MaintenanceID) }}">Edit</a>
                </td>
                <td>
                    <a href="{{ url('maintenancedelete/'.$list->MaintenanceID) }}">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
        
    </table>
   
</div>
@endsection
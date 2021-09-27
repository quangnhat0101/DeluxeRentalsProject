@extends('layout.layout2')
@section('title', 'Driver index')
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
<div class="container" style="margin-top: 100px; margin-bottom: 100px; overflow: auto;">
        @if(session('status'))
        <h3 style="color: red" >{{session('status')}}</h3>
        @endif
    <h1 style="text-align: center; color: #e43c5c">DRIVER INDEX</h1>
    <h3><a class="btn btn-danger" href="{{ url('/drivercreate') }}">Add new driver</a></h3>
    <table class="table table-bordered">
        <thead class="thead-dark text-center" >
            <tr>
                <th>DriverID</th>
                <th>DriverName</th>
                <th>DriverPhone</th>
                <th>DriverAdd</th>
                <th>DriverMail</th>
                <th colspan=3>Functions</th>
            </tr>
        </thead>

        <tbody>
            @foreach($rs as $data)
            <tr>
                <td>Driver00{{ $data->DriverID }}</td>
                <td>{{ $data->DriverName }}</td>
                <td>{{ $data->DriverPhone }}</td>
                <td>{{ $data->DriverAdd }}</td>
                <td>{{ $data->DriverMail }}</td>
                <td>
                    <a href="{{ url("driverview/{$data -> DriverID} ") }}" class="btn btn-primary btn-sm">Detail</a>
                </td>
                <td>
                    <a href="{{ url("driverupdate/{$data -> DriverID} ") }}" class="btn btn-dark btn-sm">Update</a>
                </td>
                <td>
                    <a href="{{ url("driverdelete/{$data -> DriverID} ") }}" class="btn btn-danger btn-sm"
                    onclick = "return confirm('Are you sure to delete{{$data -> DriverName}}')">Delete</a>
                </td>
            </tr>            
            @endforeach       
        </tbody>
    </table>
        
</div>                 
@endsection

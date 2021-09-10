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

<div class="container" style="margin-top: 70px; margin-bottom: 100px; overflow: auto;">
        @if(session('status'))
        <h3 style="color: red" >{{session('status')}}</h3>
        @endif
        <h1 style="text-align: center; color: #e43c5c">DRIVER INDEX</h1>
            <h3><a href="{{ url('/drivercreate') }}" class="btn btn-danger">ADD NEW DRIVER</a></h3>
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr style="text-align: center">
                        <th >ID</th>
                        <th>Name</th>
                        <th>License</th>
                        <th>DoB</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Photo</th>
                        <th>Status</th>
                        <th>Current</th>
                        <th colspan=2>Function</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($rs as $data)
                    <tr>
                        <td>DRV00{{ $data->DriverID }}</td>
                        <td>{{ $data->DriverName }}</td>
                        <td>{{ $data->DriverLicense }}</td>
                        <td>{{ $data->DriverDOB }}</td>
                        <td>{{ $data->DriverPhone }}</td>
                        <td>{{ $data->DriverAdd }}</td>
                        <td>{{ $data->DriverMail }}</td>
                        <td><img src="{{ asset('uploads/driverlist/'.$data->DriverPic) }}" width="70px" height="100px"></td>
                        <td>
                            @if($data -> DriverStatus==1)
                            Active
                            @else
                            On hold
                            @endif
                        </td>
                        <td>
                            @if($data -> CurrentDriver==1)
                            Yes
                            @else
                            No
                            @endif
                        </td>

                        <td>
                            <a href="{{ url('driverupdate/'.$data->DriverID) }}" class="btn btn-dark btn-sm">Edit</a>
                        </td>
                        <td>
                            <a href="{{ url('driverdelete/'.$data->DriverID) }}" class="btn btn-danger btn-sm"
                            onclick = "return confirm('Are you sure to delete data of {{$data -> DriverName}}')" >Delete</a>
                        </td>
                    </tr>            
                    @endforeach       
                </tbody>
            </table>
        
</div>    

    
                            
                            
                            
                        
@endsection

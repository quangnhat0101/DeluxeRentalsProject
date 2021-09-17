@extends('layout.layout2')
@section('title','Contract Details')
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

            
    <h1 style="text-align: center; color: #e43c5c">CONTRACT DETAILS</h1>
    <br>
    @foreach($contract as $getcontract)
    <h4>CONTRACT NUMBER: {{ $getcontract->ContractNo }}</h4>
    <h4>CONTRACT DATE: {{ $getcontract->ContractDate }}</h4>
    <h4>CUSTOMER ID: CUS00{{ $getcontract->CusID }}</h4>
    @endforeach
    <br>
    <h3>DETAILS</h3>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr style="text-align: center">
                    <th>ID</th>
                    <th>Contract Number</th>
                    <th>Driver ID</th>
                    <th>Car Plate </th>
                    <th>Departure</th>
                    <th>Arrival</th>
                    <th colspan=2>Function</th>

                </tr>
            </thead>    
            
            <tbody>
                @foreach($detail as $list)
                <tr>
                    <td>CD00{{ $list -> ContractDetailID }}</td>
                    <td>{{ $list -> ContractNo }}</td>
                    <td>{{ $list -> DriverID }}</td>
                    <td>{{ $list -> CarPlate }}</td>
                    <td>{{ $list -> Departure }}</td>
                    <td>{{ $list -> Arrival }}</td>

                    <td>
                        <a href="{{ url('detailupdate/'.$list->ContractDetailID) }}" class="btn btn-dark btn-sm">Edit</a>
                    </td>
                    <td>
                        <a href="{{ url('detailtdelete/'.$list->ContractDetailID) }}" class="btn btn-danger btn-sm" 
                        onclick = "return confirm('Are you sure to delete data of contract {{$list->ContractNo}}? ')">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            
        </table>
</div>

@endsection
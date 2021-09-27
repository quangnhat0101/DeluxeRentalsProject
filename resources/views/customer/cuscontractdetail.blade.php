@extends('layout.layout2')
@section('title','My Contract Details')
@section('my content')


<div class="container" style="margin-top: 70px; margin-bottom: 100px">
            
    <h1 style="text-align: center; color: #e43c5c">MY CONTRACT DETAILS</h1>
    <br>
    @foreach($contract as $getcontract)
    <h4><span style="font-weight: bold">CONTRACT NUMBER:</span> {{ $getcontract->ContractNo }}</h4>
    <h4><span style="font-weight: bold">CONTRACT DATE:</span> {{ $getcontract->ContractDate }}</h4>
    <h4><span style="font-weight: bold">CUSTOMER ID:</span> CUS00{{ $getcontract->CusID }}</h4>

    @endforeach
    <br>
    <h3 style="text-align: center; color: #e43c5c">DETAILS</h3>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr style="text-align: center">
                    <th>No.</th>
                    <th>Driver Name</th>
                    <th>Car Plate </th>
                    <th>Departure</th>
                    <th>Arrival</th>
                    <th>Price ($)</th>
                </tr>
            </thead>    
            
            <tbody>
            <?php $total = 0 ?>
            <?php $count = 1 ?>

            @foreach($detail as $list)
            <?php $total += $list->SubTotal?>
                <tr>
                    <td>{{ $count }}</td>
                    <td>{{ $list -> DriverName }}</td>
                    <td>{{ $list -> CarPlate }}</td>
                    <td>{{ $list -> Departure }}</td>
                    <td>{{ $list -> Arrival }}</td>
                    <td>{{ $list -> SubTotal }}</td>
                </tr>
                <?php $count++ ?>
                @endforeach
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style="font-weight: bold">Total ($):</td>
                    <td style="font-weight: bold">{{ $total }}</td>
                </tr>

            </tbody>
            
        </table>
        <a href="{{ url('myprofile') }}" class="btn btn-danger">Return to My Profile</a>
</div>

@endsection
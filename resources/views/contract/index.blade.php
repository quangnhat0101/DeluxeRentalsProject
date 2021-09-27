@extends('layout.layout2')
@section('title','Contract Index')
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

    <h1 style="text-align: center; color: #e43c5c">CONTRACT INDEX</h1>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr style="text-align: center">
                    <th>No.</th>
                    <th>Contract Number</th>
                    <th>Contract Date</th>
                    <th>Customer ID</th>
                    <th>Contract Status</th>
                    <th>Feedback</th>
                    <th colspan=2>Function</th>

                </tr>
            </thead>    
            
            <tbody>
                <?php $count=1?>
                @foreach($contractlist as $list)
                <tr>
                    <td>{{ $count }}</td>
                    <td>{{ $list -> ContractNo }}</td>
                    <td>{{ $list -> ContractDate }}</td>
                    <td>CUS00{{ $list -> CusID }}</td>
                    @if($list->ContractStatus == 1)
                        <td>Active</td>
                    @else
                        <td>Completed</td>
                    @endif
                    @if($list->FeedbackStatus == 1)
                        <td>Yes</td>
                    @else
                        <td>No</td>
                    @endif
                    <td>
                        <a href="{{ url('contractdetail/'.$list->ContractNo) }}" class="btn btn-dark btn-sm">Details</a>
                    </td>
                    <td>
                        <a href="{{ url('contractdelete/'.$list->ContractID) }}" class="btn btn-danger btn-sm" 
                        onclick = "return confirm('Are you sure to delete data of contract {{$list->ContractNo}}? ')">Delete</a>
                    </td>
                </tr>
                <?php $count++?>
                @endforeach
            </tbody>
            
        </table>
</div>

@endsection
        




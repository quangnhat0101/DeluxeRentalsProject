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
    <h4><span style="font-weight: bold">CONTRACT NUMBER:</span> {{ $getcontract->ContractNo }}</h4>
    <h4><span style="font-weight: bold">CONTRACT DATE:</span> {{ $getcontract->ContractDate }}</h4>
    <h4><span style="font-weight: bold">CUSTOMER ID:</span> CUS00{{ $getcontract->CusID }}</h4>

    @if($getcontract->StaffID)
    <h4>
        <span style="font-weight: bold">RESPONSIBLE STAFF ID:</span> STF00{{ $getcontract->StaffID }} 
        <a class="btn btn-dark" style="color: white" data-toggle="modal" id="smallButton" data-target="#smallModal" data-attr="{{ url('contractstaffedit/'.$getcontract->ContractID) }}" title="show">
        Edit Staff </a>
    </h4> 
    @else
    <h4>
        <span style="font-weight: bold">RESPONSIBLE STAFF ID:</span> 
        <a class="btn btn-dark" style="color: white" data-toggle="modal" id="smallButton" data-target="#smallModal" data-attr="{{ url('contractstaffedit/'.$getcontract->ContractID) }}" title="show">
        Add/Staff </a>
    </h4> 
    @endif

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
                    <th colspan=2>Function</th>

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
                    <td>
                        <a href="{{ url('detailupdate/'.$list->ContractDetailID) }}" class="btn btn-dark btn-sm">Edit</a>
                    </td>
                    <td>
                        <a href="{{ url('detaildelete/'.$list->ContractDetailID) }}" class="btn btn-danger btn-sm" 
                        onclick = "return confirm('Are you sure to delete data of contract {{$list->ContractNo}}? ')">Delete</a>
                    </td>
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
                    <td></td>

                </tr>

            </tbody>
            
        </table>
        <a href="{{ url('contractindex') }}" class="btn btn-warning">Return to Contract Index</a>
</div>

<!-- Add/Edit Staff Modal -->
    <div class="modal fade" id="smallModal" tabindex="-1" role="dialog" aria-labelledby="smallModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                <span style="font-weight: bold; text-align: center"> UPDATE RESPONSIBLE STAFF</span>
                </div>
                <div class="modal-body" id="smallBody">
                    <div>
                        <!-- ModalContent -->
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Script for modal -->
    <script>
        $(document).on('click', '#smallButton', function(event) {
            event.preventDefault();
            let href = $(this).attr('data-attr');
            $.ajax({
                url: href,
                beforeSend: function() {
                    $('#loader').show();
                },
                // return the result
                success: function(result) {
                    $('#smallModal').modal("show");
                    $('#smallBody').html(result).show();
                },
                complete: function() {
                    $('#loader').hide();
                },
                error: function(jqXHR, testStatus, error) {
                    console.log(error);
                    alert("Page " + href + " cannot open. Error:" + error);
                    $('#loader').hide();
                },
                timeout: 8000
            })
        });

    </script>
@endsection
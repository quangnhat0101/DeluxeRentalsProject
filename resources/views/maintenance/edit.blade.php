@extends('layout.layout2')
@section('title', 'Staff List')
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
<h1>Edit Maintenance</h1>
<br>
<br>


    <form method="post" action="{{ url('maintenanceupdate/'.$maintenancelist->MaintenanceID) }}" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
            <label>Date</label>
            <input type="date" class="form-control" name="txtDate" value="{{ $maintenancelist->MaintenanceDate }}">
        </div>
        <div class="form-group">
            <label>Car</label>
            <input type="text" class="form-control" name="txtCarPlate" value="{{ $maintenancelist->CarPlate }}">
        </div>
        <div class="form-group">
            <label>Comment</label>
            <input type="text" class="form-control" name="txtComment" value="{{ $maintenancelist->Comment }}">
        </div>
        <button type="submit" class="btn btn-danger">Submit</button>
        <a class ="btn btn-dark" href="{{ url('maintenanceindex') }}">Return to index</a>
    </form>
</div>
@endsection
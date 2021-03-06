@extends('layout.layout2')
@section('title','Update Contract Detail')
@section('my content')

<div class="container" style="margin-top: 100px; margin-bottom: 100px">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-md-2 col-md-8">
                    <div class="card bg-light"> <!--card start-->  
                        <div class="card-header">
                            @if(session('status'))
                            <h3 style="color: red" >{{session('status')}}</h3>
                            @endif
                            <h1>UPDATE CONTRACT DETAIL INFORMATION</h1>
                        </div>
                        <div class="card-body">  
                            <form method="post" action="{{ url('detailupdate/'.$detail->ContractDetailID) }}" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group">
                                    <label>Contract detail ID</label>
                                    <input type="text" class="form-control" value="{{ $detail->ContractDetailID }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Contract Number</label>
                                    <input type="text" class="form-control" value="{{ $detail->ContractNo }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Driver Name</label>
                                    <select class="form-select" name="txtDriverName">
                                        <option selected>{{ $detail->DriverName }}</option>
                                        @foreach($driverlist as $dlist)
                                        <option value="{{ $dlist->DriverName}}">{{$dlist->DriverName}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Car Plate</label>
                                    <select class="form-select" name="txtCarPlate">
                                        <option selected>{{ $detail->CarPlate }}</option>
                                        @foreach($carlist as $clist)
                                        <option value="{{ $clist->CarPlate}}">{{ $clist->CarPlate}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Departure</label>
                                    <input type="date" class="form-control" name="txtDeparture" value="{{ $detail->Departure }}">
                                </div>
                                <div class="form-group">
                                    <label>Arrival</label>
                                    <input type="date" class="form-control" name="txtArrival" value="{{ $detail->Arrival }}">
                                </div>
                                <div class="form-group">
                                    <label>Price</label>
                                    <input type="number" class="form-control" name="txtSubtotal" value="{{ $detail->SubTotal }}">
                                </div>

                                <button type="submit" class="btn btn-danger">Update</button>
                                <a class ="btn btn-dark" href="{{ url('contractdetail/'.$detail->ContractNo) }}">Return to Contract details</a>
                            </form>
                        </div>     

                    </div>   <!--card end-->                                    
                </div>
            </div>
        </div>
    </section>
</div>
    
@endsection 
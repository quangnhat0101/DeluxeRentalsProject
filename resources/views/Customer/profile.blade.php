@extends('layout.layout2')
@section('title','Customer Account')
@section('my content')

<div class="container" style="margin-top: 50px; margin-bottom: 50px">
    <div class="row">
        <div class="col-4">

            <div style="margin-bottom: 50px"> <!-- /.personalinfo -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">MY PROFILE</h3>
                    </div>

                    <div class="card-body">
                        @foreach($customerlist as $user)
                        <form method="POST" action="{{ url('drivercreate') }}" enctype="multipart/form-data"> 
                            @csrf
                            <div class="form-group">
                                    <label>User ID</label>
                                    <input  class="form-control" value="CUS00{{ $user->id }}" readonly>
                            </div>
                            <div class="form-group">
                                    <label>Username</label>
                                    <input  class="form-control" value="{{ $user->name }}" readonly>
                            </div>
                            <div class="form-group">
                                    <label>DoB</label>
                                    <input class="form-control" value="{{ $user->dob }}" readonly>
                            </div>
                            <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" value="{{ $user->email }}" readonly>
                            </div>
                            <div class="form-group">
                                    <label>Address</label>
                                    <input class="form-control" value="{{ $user->address }}" readonly>
                            </div>
                            <div class="form-group">
                                    <label>Phone number</label>
                                    <input class="form-control" value="{{ $user->phone }}" readonly>
                            </div>

                                <a class ="btn btn-danger" href="{{url('customerupdate/'.$user->id)}}">Update</a>
                                <a class ="btn btn-dark" href="{{url('customerpassupdate/'.$user->id)}}">Change Password</a>
                        @endforeach   
                        </form> 
                    </div><!-- /.card body-->            
                </div><!-- /.card -->
            </div><!-- /.personalinfo -->
        </div><!-- /.col 4 -->
        
        <div class="col-8"><!-- /.contractlist -->
                        @if(session('status'))
                            <h5 style="color: red" >{{session('status')}}</h5>
                        @endif
            <h1 style="text-align: center; color: #e43c5c">MY CONTRACTS</h1>
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr style="text-align: center">
                        <th>Contract ID</th>
                        <th>Contract Number</th>
                        <th>Contract Date</th>
                        <th>Contract Status</th>
                        <th colspan=2>Function</th>
                    </tr>
                </thead>    
                
                <tbody>
                    @foreach($cuscontract as $list)
                    <tr>
                        <td>CON00{{ $list -> ContractID }}</td>
                        <td>{{ $list -> ContractNo }}</td>
                        <td>{{ $list -> ContractDate }}</td>
                        @if($list -> ContractStatus == 1)
                        <td>Active</td>
                        @else
                        <td>Completed</td>
                        @endif
                        <td>
                            <a href="{{ url('mycontractdetail/'.$list->ContractNo) }}" class="btn btn-dark btn-sm">Details</a>
                        </td>
                        @if($list->FeedbackStatus == 1)
                        <td>
                            <div class="btn btn-secondary btn-sm">Feedback</div>
                        </td>
                        @else
                        <td>
                            <a href="{{url('feedbackcreate/'.$list->ContractNo)}}" class="btn btn-danger btn-sm">Feedback</a>
                        </td>
                        @endif

                    </tr>
                    @endforeach
                </tbody>
                
            </table>
        </div> <!-- /.contractlist -->
    </div> <!-- /.row -->
</div><!-- /.container -->


@endsection
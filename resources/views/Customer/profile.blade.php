@extends('layout.layout2')
@section('title','Customer Account')
@section('my content')

<div class="container" style="margin-top: 100px; margin-bottom: 100px">
<h1 style="text-align: center">My Profile:</h1>
<br>
<br>
<table class="table table-bordered table-hover">  
    <div class="row">
        <div class="col-md-3 col-sm-3">
            <ul>
                <li><a href="{{url('customerindex')}}">Profile Settings</a></li>
                <form method="POST">
                    @foreach($customerlist as $list)
                    <li><a href="{{url('customerpassupdate/'.$list->CusID)}}">Update Password</a></li>
                    @endforeach
                </form>
                <li><a href="">My Booking</a></li>
                <li><a href="{{url('feedbackindex')}}">Feedback</a></li>
                <li><a href="">Sign Out</a></li>
            </ul>
        </div>
        <div class="col-md-6 col-sm-8">
            <div>
                <h3 class="uppercase underline">General Infomation</h3>
                <br><br>
                <form method="POST">
                    @foreach($customerlist as $list)
                    <div class="form-group">
                        <label>Customer Name</label>
                        <input type="text" class="form-control" name="txtcName" value="{{$list->CusName}}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Customer Day of Birth</label>
                        <input type="text" class="form-control" name="txtcDOB" value="{{$list->CusDOB}}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Customer Address</label>
                        <input type="text" class="form-control" name="txtcAdd" value="{{$list->CusAdd}}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Customer Phone Number</label>
                        <input type="number" class="form-control" name="txtcPhone" value="{{$list->CusPhone}}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Customer Email</label>
                        <input type="text" class="form-control" name="txtcMail" value="{{$list->CusMail}}" readonly>
                    </div>

                    <a href="{{url('customerupdate/'.$list->CusID)}}" class="btn btn-primary">Edit</a>
                    @endforeach
                    
                </form>
                
                    
               
            </div>
        </div>
    </div>

    
</table> 

</div>
 

@endsection
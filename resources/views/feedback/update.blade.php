@extends('layout.layout2')
@section('title', 'Create Feedback')
@section('my content')
<div class="container" style="margin-top: 100px; margin-bottom: 100px">
    <div class="row">
        @if(session('success'))
            <h6>{{session('success')}}</h6>
        @endif
        <h1>Update Customer Information</h1>
        <a href="{{ url('feedbackindex') }}">Return to index</a>
        <br><br>
        <form method="post" action="{{ url('feedbackupdate/'.$feedbacklist->CusID) }}" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
                <label>Driver Attitude</label>
                <input type="text" class="form-control" name="txtAtt" value="{{$feedbacklist->CusName}}" >
            </div>
            <div class="form-group">
                <label>Customer Day of Birth</label>
                <input type="text" class="form-control" name="txtcDOB" value="{{$customerlist->CusDOB}}" >
            </div>
            <div class="form-group">
                <label>Customer Address</label>
                <input type="text" class="form-control" name="txtcAdd" value="{{$customerlist->CusAdd}}" >
            </div>
            <div class="form-group">
                <label>Customer Phone Number</label>
                <input type="number" class="form-control" name="txtcPhone" value="{{$customerlist->CusPhone}}" >
            </div>
            <div class="form-group">
                <label>Customer Email</label>
                <input type="text" class="form-control" name="txtcMail" value="{{$customerlist->CusMail}}" >
            </div>
                        
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

</div>
@endsection
@extends('layout.layout2')
@section('title','My Profile Update')
@section('my content')
<div class="container" style="margin-top: 100px; margin-bottom: 100px">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-md-2 col-md-8">
                    <div class="card bg-light"><!--card start--> 
                             
                        <div class="card-header">
                            <h1>Update Profile</h1>
                        </div>
                                
                        <div class="card-body">     
                            <form method="post" action="{{ url('customerupdate/'.$customerlist->id) }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Your Name</label>
                                    <input type="text" class="form-control" name="txtcName" value="{{$customerlist->name}}" >
                                </div>
                                <div class="form-group">
                                    <label>Your Day of Birth</label>
                                    <input type="text" class="form-control" name="txtcDOB" value="{{$customerlist->dob}}" >
                                </div>
                                <div class="form-group">
                                    <label>Your Address</label>
                                    <input type="text" class="form-control" name="txtcAdd" value="{{$customerlist->address}}" >
                                </div>
                                <div class="form-group">
                                    <label>Your Phone Number</label>
                                    <input type="number" class="form-control" name="txtcPhone" value="{{$customerlist->phone}}" >
                                </div>
                                <div class="form-group">
                                    <label>Customer Email</label>
                                    <input type="text" class="form-control" value="{{$customerlist->email}}" readonly >
                                     <div class="text-danger"> Please contact us to update your email!</div> 
                                </div>
                                <button type="submit" class="btn btn-danger">Update</button>
                                <a href="{{ url('myprofile') }}" class="btn btn-dark">Return</a>
                            </form>                           
                        </div>  
                    </div>    <!-- card end-->  
                </div>
            </div>
        </div>
    </section>
</div>
    
@endsection 
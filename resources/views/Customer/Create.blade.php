@extends('layout.layout2')
@section('title', 'Create new customer')
@section('my content')
<div class="container" style="margin-top: 100px; margin-bottom: 100px">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-md-2 col-md-8">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            @if(session('success'))
                                <h6>{{session('success')}}</h6>
                            @endif
                            <h3 class="card-title">NEW CUSTOMER CREATION</h3>
                            
                        </div>
                        <div class="card-body">
                        <form method="post" action="{{ url('customercreate') }}" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                                <label>Customer Name</label>
                                <input type="text" class="form-control" name="txtcName" placeholder="Enter Full Name">
                            </div>
                            <div class="form-group">
                                <label>Customer Day of Birth</label>
                                <input type="text" class="form-control" name="txtcDOB" placeholder="Enter your Birthday in YYYY-MM-DD">
                            </div>
                            <div class="form-group">
                                <label>Customer Address</label>
                                <input type="text" class="form-control" name="txtcAdd" placeholder="Enter your current house address">
                            </div>
                            <div class="form-group">
                                <label>Customer Phone Number</label>
                                <input type="text" class="form-control" name="txtcPhone" placeholder="Enter your phone number">
                            </div>
                            <div class="form-group">
                                <label>Customer Email</label>
                                <input type="text" class="form-control" name="txtcMail" placeholder="Enter your email">
                            </div>
                            <div class="form-group">
                                <label>Customer Password</label>
                                <input type="text" class="form-control" name="txtcPass" placeholder="Enter your account password">
                            </div>
                            
                            
                            <button type="submit" class="btn btn-primary">Register</button>
                            
                        </form>
                        </div>
                        

                    </div>                    
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
</div>
   
@endsection
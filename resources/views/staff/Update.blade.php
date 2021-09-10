<!-- lưu tại /resources/views/item/create.blade.php -->
@extends('layout.layout2')
@section('title', 'Update Item')
@section('my content')
<div class="container" style="margin-top: 100px; margin-bottom: 100px">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-md-2 col-md-8">
                    <!-- general form elements -->
                    <div class="card bg-light">
                        <div class="card-header">
                            <h1 class="card-title">Update Staff Information</h1>
                        
                            <!-- /.card-header -->
                            <!-- form start -->
                            <!--Chèn đoạn mã <form></form> vào đây-->
                         @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif     
                        </div>    
                        <div class="card-body">
                            <!-- Form start -->
                            <form method="post" action="{{ url('staffupdate/'.$staff->StaffID) }}" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group">
                                    <label>Staff Name</label>
                                    <input type="text" class="form-control" name="txtsName" value="{{ $staff->StaffName }}">
                                </div>
                                <div class="form-group">
                                    <label>Staff Pass</label>
                                    <input type="number" class="form-control" name="txtsPass" value="{{ $staff->StaffPass }}">
                                </div>
                                <div class="form-group">
                                    <label>Staff DoB</label>
                                    <input class="form-control" name="txtsDOB" value="{{ $staff->StaffDOB }}">
                                </div>
                                <div class="form-group">
                                    <label>Staff Phone Number</label>
                                    <input type="number" class="form-control" name="txtsPhone" value="{{ $staff->StaffPhone }}">
                                </div>
                                <div class="form-group">
                                    <label>Staff Address</label>
                                    <input type="text" class="form-control" name="txtsAdd" value="{{ $staff->StaffAdd }}">
                                </div>
                                <div class="form-group">
                                    <label>Staff Email</label>
                                    <input type="text" class="form-control" name="txtsMail" value="{{ $staff->StaffMail }}">
                                </div>
                                <div class="form-group">
                                    <label>Staff Salary</label>
                                    <input type="number" class="form-control" name="txtsSalary" value="{{ $staff->StaffSalary }}">
                                </div>
                                <div class="form-check">
                                    
                                    <input type="checkbox" class="form-check-input" name="txtsCurrent" value="1" 
                                    @if($staff->CurrentStaff == 1)
                                    checked
                                    @endif
                                    >
                                    <label class="form-check-label" for="exampleCheck1">Active</label>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label>Car Image</label>
                                    <input type="file" name="txtsPic">
                                    <img src="{{ asset('uploads/stafflist/'.$staff->CarPic) }}" width="100px" height="70px" alt="CarImage">
                                    
                                </div>
                            
                                <button type="submit" class="btn btn-danger">Update</button>
                                <a class ="btn btn-dark" href="{{ url('staffindex') }}">Return to index</a>
                            </form>
                            <!-- End form -->
                        </div>   
                        

                    </div>                    
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
</div>
   
@endsection





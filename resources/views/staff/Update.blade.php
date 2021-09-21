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
                            @if(session('status'))
                                <h6>{{session('status')}}</h6>
                            @endif
                        </div>                         

                         @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            </div>
                        @endif     
   
                        <div class="card-body">
                            <!-- Form start -->
                            <form method="post" action="{{ url('staffupdate/'.$staff->StaffID) }}" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group">
                                    <label>Staff Name</label>
                                    <input type="text" class="form-control" name="txtsName" value="{{ $staff->StaffName }}">
                                    @if ($errors->has('txtsName'))
                                        <span class="text-danger">{{ $errors->first('txtsName') }}</span>
                                    @endif  
                                </div>
                            
                                <div class="form-group">
                                    <label>Staff Password</label>
                                    <input type="text" class="form-control" name="txtsPass" value="{{ $staff->StaffPass }}">
                                    @if ($errors->has('txtsPass'))
                                        <span class="text-danger">{{ $errors->first('txtsPass') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>Staff DoB</label>
                                    <input type="date" class="form-control" name="txtsDOB" value="{{ $staff->StaffDOB }}">
                                    @if ($errors->has('txtsDOB'))
                                        <span class="text-danger">{{ $errors->first('txtsDOB') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>Staff Phone</label>
                                    <input type="text" class="form-control" name="txtsPhone"  value="{{ $staff->StaffPhone }}">
                                    @if ($errors->has('txtsPhone'))
                                        <span class="text-danger">{{ $errors->first('txtsPhone') }}</span>
                                    @endif
                                </div>
                            
                                <div class="form-group">
                                    <label>Staff Address</label>
                                    <input type="text" class="form-control" name="txtsAdd" value="{{ $staff->StaffAdd }}">
                                    @if ($errors->has('txtsAdd'))
                                        <span class="text-danger">{{ $errors->first('txtsAdd') }}</span>
                                    @endif
                                </div>
                            
                                <div class="form-group">
                                    <label>Staff Mail</label>
                                    <input type="text" class="form-control" name="txtsMail" value="{{ $staff->StaffMail }}">
                                    @if ($errors->has('txtsMail'))
                                        <span class="text-danger">{{ $errors->first('txtsMail') }}</span>
                                    @endif
                                </div>
                            
                                <div class="form-group">
                                    <label>Staff Salary</label>
                                    <input type="text" class="form-control" name="txtsSalary" value="{{ $staff->StaffSalary }}">
                                    @if ($errors->has('txtsSalary'))
                                        <span class="text-danger">{{ $errors->first('txtsSalary') }}</span>
                                    @endif
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
                                    <img src="{{ asset('uploads/stafflist/'.$staff->StaffPic) }}" width="100px" height="70px" alt="CarImage">
                                    @if ($errors->has('txtsPic'))
                                        <span class="text-danger">{{ $errors->first('txtsPic') }}</span>
                                    @endif 
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





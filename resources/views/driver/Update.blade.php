<!-- lưu tại /resources/views/item/create.blade.php -->
@extends('layout.layout2')
@section('title', 'Update Driver Information')
@section('my content')
<div class="container" style="margin-top: 100px; margin-bottom: 100px">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-md-2 col-md-8">
                    <div class="card bg-light"><!--card start--> 

                        <div class="card-header">
                            @if(session('success'))
                                <h6>{{session('success')}}</h6>
                            @endif
                            <h1>Update Driver Information</h1>
                            

                        <div class="card-body">
                        <p class="text-danger font-weight-bold">*All fields are required.</p>
                            
                            <form method="POST" action="{{ url('driverupdate/'.$driver->DriverID) }}" enctype="multipart/form-data"> 
                                @csrf
                                <div class="form-group">
                                    <label>Driver Name</label>
                                    <input type="text" class="form-control" name="txtdName" value="{{ $driver->DriverName }}">
                                    @if ($errors->has('txtdName'))
                                        <span class="text-danger">{{ $errors->first('txtdName') }}</span>
                                    @endif 
                                </div>

                                <div class="form-group">
                                    <label>Driver Lience</label>
                                    <input type="text" class="form-control" name="txtdLicense" value="{{ $driver->DriverLicense }}">
                                    @if ($errors->has('txtdLicense'))
                                        <span class="text-danger">{{ $errors->first('txtdLicense') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>Driver DOB</label>
                                    <input type="date" class="form-control" name="txtdDOB" value="{{ $driver->DriverDOB }}">
                                     @if ($errors->has('txtdDOB'))
                                        <span class="text-danger">{{ $errors->first('txtdDOB') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>Driver Phone</label>
                                    <input type="text" class="form-control" name="txtdPhone" value="{{ $driver->DriverPhone }}">
                                    @if ($errors->has('txtdPhone'))
                                        <span class="text-danger">{{ $errors->first('txtdPhone') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>Driver Address</label>
                                    <input type="text" class="form-control" name="txtdAdd" value="{{ $driver->DriverAdd }}">
                                    @if ($errors->has('txtdAdd'))
                                        <span class="text-danger">{{ $errors->first('txtdAdd') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>Driver Mail</label>
                                    <input type="text" class="form-control" name="txtdMail" value="{{ $driver->DriverMail }}">
                                    @if ($errors->has('txtdMail'))
                                        <span class="text-danger">{{ $errors->first('txtdMail') }}</span>
                                    @endif
                                </div>

                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" value="1" name="txtdStatus"
                                    @if($driver->DriverStatus == 1)
                                    checked
                                    @endif
                                    >
                                    <label class="form-check-label" for="exampleCheck1">Active Driver</label>
                                </div>

                                <!-- <div class="form-check">
                                    <input type="checkbox" class="form-check-input" value="1" name="txtdCurrent"
                                    @if($driver->CurrentDriver == 1)
                                    checked
                                    @endif   
                                    >
                                    <label class="form-check-label" for="exampleCheck1">Driver Current</label>
                                </div> -->

                                <div class="form-group">
                                    <label>Driver Picture</label>
                                    <input type="file" name="txtdPic">
                                    <img src="{{ asset('uploads/driverlist/'.$driver->DriverPic) }}" width="100px" height="70px" >
                                    @if ($errors->has('txtdPic'))
                                    <span class="text-danger">{{ $errors->first('txtdPic') }}</span>
                                    @endif 
                                </div>
                            
                                <button type="submit" class="btn btn-danger">Submit</button>
                                <a class ="btn btn-dark" href="{{ url('driverindex') }}">Return to index</a>
                                    
                            </form>
                        </div>                
                    </div>    <!-- card end-->                                   
                </div>
            </div>
        </div>
    </section>
</div>
   
@endsection

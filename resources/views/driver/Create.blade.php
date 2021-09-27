<!-- lưu tại /resources/views/item/create.blade.php -->
@extends('layout.layout2')
@section('title', 'Create New Driver')
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
                            <h3 class="card-title">NEW DRIVER INFORMATION</h3>
                        </div>
                        <div class="card-body">
                        <p class="text-danger font-weight-bold">*All fields are required.</p>
                            <form method="POST" action="{{ url('drivercreate') }}" enctype="multipart/form-data"> 
                                @csrf
                                <div class="form-group">
                                        <label>Driver Name</label>
                                        <input type="text" class="form-control" value="{{ old('txtdName') }}" name="txtdName" placeholder="Enter Driver Name">
                                        @if ($errors->has('txtdName'))
                                            <span class="text-danger">{{ $errors->first('txtdName') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label>Driver License</label>
                                        <input type="text" class="form-control" value="{{ old('txtdLicense') }}" name="txtdLicense" placeholder="Enter Driver License">
                                        @if ($errors->has('txtdLicense'))
                                            <span class="text-danger">{{ $errors->first('txtdLicense') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label>Driver DOB</label>
                                        <input type="date" class="form-control" name="txtdDOB" placeholder="Enter Driver DOB" value="{{ old('txtdDOB') }}">
                                        @if ($errors->has('txtdDOB'))
                                            <span class="text-danger">{{ $errors->first('txtdDOB') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label>Driver Phone</label>
                                        <input type="text" class="form-control" value="{{ old('txtdPhone') }}" name="txtdPhone" placeholder="Enter Driver Phone">
                                        @if ($errors->has('txtdPhone'))
                                            <span class="text-danger">{{ $errors->first('txtdPhone') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label>Driver Address</label>
                                        <input type="text" class="form-control" value="{{ old('txtdAdd') }}" name="txtdAdd" placeholder="Enter Driver Address">
                                        @if ($errors->has('txtdAdd'))
                                            <span class="text-danger">{{ $errors->first('txtdAdd') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label>Driver Mail</label>
                                        <input type="text" class="form-control" value="{{ old('txtdMail') }}" name="txtdMail" placeholder="Enter Driver Mail">
                                        @if ($errors->has('txtdMail'))
                                            <span class="text-danger">{{ $errors->first('txtdMail') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label>Driver Picture</label>
                                        <input type="file" name="txtdPic" value="{{ old('txtdPic') }}">
                                        @if ($errors->has('txtdPic'))
                                            <span class="text-danger">{{ $errors->first('txtdPic') }}</span>
                                        @endif 
                                    </div>
                                    
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="txtdStatus" value="1">
                                        <label class="form-check-label" for="exampleCheck1">Driver Status</label>                                    
                                    </div>
    
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="txtdCurent" value="1">
                                        <label class="form-check-label" for="exampleCheck1">Driver Current</label>                                    
                                    </div>
    
                                    <br>
                                    <button type="submit" class="btn btn-danger">Submit</button>
                                    <a class ="btn btn-dark" href="{{ url('driverindex') }}">Return to index</a>
                                
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


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
                            <form method="POST" action="{{ url('drivercreate') }}" enctype="multipart/form-data"> 
                                @csrf
                                    <div class="form-group">
                                        <label>Driver Name</label>
                                        <input type="text" class="form-control" name="txtdName" placeholder="Enter Driver Name">
                                    </div>
                                    <div class="form-group">
                                        <label>Driver License</label>
                                        <input type="text" class="form-control" name="txtdLicense" placeholder="Enter Driver License">
                                    </div>
                                    <div class="form-group">
                                        <label>Driver DOB</label>
                                        <input type="date" class="form-control" name="txtdDOB" placeholder="Enter Driver DOB">
                                    </div>
                                    <div class="form-group">
                                        <label>Driver Phone</label>
                                        <input type="text" class="form-control" name="txtdPhone" placeholder="Enter Driver Phone">
                                    </div>
                                    <div class="form-group">
                                        <label>Driver Address</label>
                                        <input type="text" class="form-control" name="txtdAdd" placeholder="Enter Driver Address">
                                    </div>
                                    <div class="form-group">
                                        <label>Driver Mail</label>
                                        <input type="text" class="form-control" name="txtdMail" placeholder="Enter Driver Mail">
                                    </div>
                                    <div class="form-group">
                                        <label>Driver Picture</label>
                                        <input type="file" name="txtdPic">
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


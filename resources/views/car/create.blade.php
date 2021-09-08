@extends('layout.layout2')
@section('title', 'Create new car')
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
                            <h3 class="card-title">NEW CAR INFORMATION</h3>
                            
                        </div>
                        <div class="card-body">
                        <form method="post" action="{{ url('carcreate') }}" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                                <label>Car Brand</label>
                                <input type="text" class="form-control" name="txtBrand" placeholder="Enter car brand">
                            </div>
                            <div class="form-group">
                                <label>Car Model</label>
                                <input type="text" class="form-control" name="txtModel" placeholder="Enter car type">
                            </div>
                            <div class="form-group">
                                <label>Car Plate</label>
                                <input type="text" class="form-control" name="txtPlate" placeholder="Enter car plate">
                            </div>
                            <div class="form-group">
                                <label>Car Price per day</label>
                                <input type="number" class="form-control" name="txtPrice" placeholder="Enter car price">
                            </div>
                            <div class="form-group">
                                <label>Car Image</label>
                                <input type="file" class="form-control" name="CarPic">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a class ="btn btn-success" href="{{ url('carindex') }}">Return to index</a>
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
@extends('layout.layout2')
@section('title', 'Create new car')
@section('my content')
<div class="container" style="margin-top: 100px; margin-bottom: 100px">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-md-2 col-md-8">
                    <div class="card bg-light"><!--card start--> 
                        <div class="card-header">
                            @if(session('status'))
                            <h3 style="color: red" >{{session('status')}}</h3>
                            @endif
                            <h1 class="card-title">NEW CAR INFORMATION</h1>                           
                        </div>
                        <div class="card-body">
                        <form method="post" action="{{ url('carcreate') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Car Brand</label>                                

                                <select class="form-select" name="txtBrand">
                                        @foreach($brandlist as $blist)
                                        <option value="{{ $blist->BrandName }}">{{ $blist->BrandName }}</option>
                                        @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Car Model</label>
                                <input type="text" class="form-control" name="txtModel" placeholder="Enter car model">
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

                            <button type="submit" class="btn btn-danger">Submit</button>
                            <a class ="btn btn-dark" href="{{ url('carindex') }}">Return to index</a>
                        </form>
                        </div>                       
                    </div>    <!-- card end-->                                   
                </div>
            </div>
        </div>
    </section>
</div>
   
@endsection
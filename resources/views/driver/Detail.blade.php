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
                            <h1 class="card-title">DETAILED INFORMATION OF DRIVER</h1>                            
                        </div>   
   
                        <div class="card-body">
                            <!-- Form start -->
                            <form method="post" action="{{ url('viewdetail/'.$driver->DriverID) }}" enctype="multipart/form-data">
                            @csrf
                            <table class="table table-striped">
                                <tr>
                                    <th scope="row">Driver ID:</th>
                                    <td>Driver00{{ $driver->DriverID }}</td>
                                </tr>

                                <tr>
                                    <th scope="row">Name:</th>
                                    <td>{{ $driver->DriverName }}</td>
                                </tr>

                                <tr>
                                    <th scope="row">Driving License:</th>
                                    <td>{{ $driver->DriverLicense }}</td>
                                </tr>

                                <tr>
                                    <th scope="row">DoB:</th>
                                    <td>{{ $driver->DriverDOB }}</td>
                                </tr>

                                <tr>
                                    <th scope="row">Phone:</th>
                                    <td>{{ $driver->DriverPhone }}</td>
                                </tr>

                                <tr>
                                    <th scope="row">Address:</th>
                                    <td>{{ $driver->DriverAdd }}</td>
                                </tr>

                                <tr>
                                    <th scope="row">Email:</th>
                                    <td>{{ $driver->DriverMail }}</td>
                                </tr>

                                <tr>
                                    <th scope="row">Picture:</th>
                                    <td><img src="{{ asset('uploads/driverlist/'.$driver->DriverPic) }}" width="90px" height="70px"></td>
                                </tr>

                                <tr>
                                    <th scope="row">Driver Status:</th>
                                    <td>{{ $driver->DriverStatus }}</td>
                                </tr>

                            </table>
                                <a class ="btn btn-dark" href="{{ url('driverindex') }}">Return to index</a>
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





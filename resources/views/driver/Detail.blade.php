<!-- lưu tại /resources/views/item/create.blade.php -->
@extends('layout.layout2')
@section('title', 'Driver detail')
@section('my content')
<div class="container" style="margin-top: 100px; margin-bottom: 100px">

    <div class="row">
        <div class="col-4">
            <img src="{{ asset('uploads/driverlist/'.$driver->DriverPic) }}"  width="100%" alt="Driver Image" class="border border-danger" style="padding: 5px">
        </div>
      
        <div class="col-8">
            <div class="card bg-light">
                <div class="card-header">
                    <h1 class="card-title">DETAILED INFORMATION OF DRIVER</h1>                            
                </div> 

                <div class="card-body">
                    <!-- Form start -->

                    <table class="table table-striped">
                        <tr>
                            <th scope="row">Driver ID:</th>
                            <td>DRV00{{ $driver->DriverID }}</td>   
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
                            <th scope="row">Driver Status:</th>
                            @if( $driver->DriverStatus == "1")
                            <td>Active</td> 
                            @else
                            <td>On hold</td> 
                            @endif
                                
                        </tr>                  
                    </table>
                        <a class ="btn btn-dark" href="{{ url('driverindex') }}">Return to index</a>


                </div>   
            </div>   <!-- /.card -->

        </div> <!-- col-6 -->
    </div> <!--row-->

</div> <!--container-->

@endsection





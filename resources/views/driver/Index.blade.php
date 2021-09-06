<!-- Lưu tại resources/views/item/index.blade.php -->
@extends('layout.layout')
@section('title','Driver Index')
@section('my content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    {{-- <div> <!--Notification-->
                        @php
                            if(isset('$_GET[msgCreate]')==null):
                                echo '<div>Insert sucessfully</div>';
                            endif;
                        @endphp
                    </div> --}}
                    <h1>Item List</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Admin</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content" >
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Using update | delete function to change data</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                    <span><a href="{{url('driver/adddriver')}}">Create New</a></span>
                        <!--Chèn đoạn mả <table></table vào đây-->
                        <table border="1">
                            <tr>
                                <th>DriverID</th>
                                <th>DriverName</th>
                                <th>DriverLience</th>
                                <th>DriverDOB</th>
                                <th>DriverPhone</th>
                                <th>DriverAdd</th>
                                <th>DriverMail</th>
                                <th>DriverPic</th>
                                <th>DriverStatus</th>
                                <th>CurentDriver</th>

                            </tr>
                            @foreach($rs as $data)
                            <tr>
                                <td>Driver00{{ $data->DriverID }}</td>
                                <td>{{ $data->DriverName }}</td>
                                <td>{{ $data->DriverLience }}</td>
                                <td>{{ $data->DriverDOB }}</td>
                                <td>{{ $data->DriverPhone }}</td>
                                <td>{{ $data->DriverAdd }}</td>
                                <td>{{ $data->DriverMail }}</td>
                                <td><img src="{{ asset('img/'.$data->DriverPic) }}" width="130px" height="70px"></td>
                                <td>{{ $data -> DriverStatus }}</td>
                                <td>{{ $data -> CurentDriver }}</td>

                                <td>
                                    <a href="{{ url("driver/updatedriver/{$data -> DriverID} ") }}">Update</a>
                                    <a href="{{ url("driver/deletedriver/{$data -> DriverID} ") }}"
                                    onclick = "return confirm('Are you sure to delete{{$data -> DriverName}}')">Delete</a>
                                </td>
                            </tr>            
                            @endforeach       
                            
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@endsection
@section('script-section')
    <script>
        $(function () {
            $('#item').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
            });
        });
    </script>
@endsection 
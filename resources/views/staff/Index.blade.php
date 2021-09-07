<!-- Lưu tại resources/views/item/index.blade.php -->
@extends('layout.layout2')
@section('title', 'Staff List')
@section('my content')
<div class="container" style="margin-top: 100px; margin-bottom: 100px">
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
                    <h1>Staff List</h1>
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
                        <h3><a href="{{url('staffcreate')}}">Create New</a></h3>
                    
                        <!--Chèn đoạn mả <table></table vào đây-->
                        <table class="table table-bordered table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th>StaffID</th>
                                    <th>StaffName</th>
                                    <th>StaffPass</th>
                                    <th>StaffDOB</th>
                                    <th>StaffPhone</th>
                                    <th>StaffAdd</th>
                                    <th>StaffMail</th>
                                    <th>StaffSalary</th>
                                    <th>StaffPic</th>
                                    <th>CurrentStaff</th>

                                </tr>
                            </thead>
                            <tbody>
                            @foreach($rs as $data)
                                <tr>
                                    <td>Staff00{{ $data -> StaffID }}</td>
                                    <td>{{ $data -> StaffName }}</td>
                                    <td>{{ $data -> StaffPass }}</td>
                                    <td>{{ $data -> StaffDOB }}</td>
                                    <td>{{ $data -> StaffPhone }}</td>
                                    <td>{{ $data -> StaffAdd }}</td>
                                    <td>{{ $data -> StaffMail }}</td>
                                    <td>{{ $data -> StaffSalary }}</td>
                                    <td><img src="{{ asset('img/'.$data->StaffPic) }}" width="130px" height="70px"></td>
                                    {{-- <td>{{ $data -> StaffPic }}</td> --}}
                                    <td>{{ $data -> CurrentStaff }}</td>

                                    <td>
                                        <a href="{{ url("staffupdate/{$data -> StaffID} ") }}">Update</a>
                                        <a href="{{ url("staffdelete/{$data -> StaffID} ") }}"
                                        onclick = "return confirm('Are you sure to delete{{$data -> StaffName}}')">Delete</a>
                                    </td>
                                </tr>            
                                @endforeach  
                            </tbody>
                                 
                            
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
</div>
    
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
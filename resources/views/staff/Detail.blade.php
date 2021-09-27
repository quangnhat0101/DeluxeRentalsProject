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
                            <h1 class="card-title">DETAILED INFORMATION OF STAFF</h1>                            
                        </div>   
   
                        <div class="card-body">
                            <!-- Form start -->
                            <form method="post" action="{{ url('viewdetail/'.$staff->StaffID) }}" enctype="multipart/form-data">
                            @csrf
                                <table class="table table-striped">
                                    <tr>
                                        <th scope="row">ID:</th>
                                        <td>Staff00{{ $staff->StaffID }}</td>
                                    </tr>
                
                                    <tr>
                                        <th scope="row">Name:</th>
                                        <td>{{ $staff->StaffName }}</td>
                                    </tr>
                
                                    <tr>
                                        <th scope="row">Password:</th>
                                        <td>{{ $staff->StaffPass }}</td>
                                    </tr>
                
                                    <tr>
                                        <th scope="row">Date of Birth:</th>
                                        <td>{{ $staff->StaffDOB }}</td>
                                    </tr>
                
                                    <tr>
                                        <th scope="row">Telephone:</th>
                                        <td>{{ $staff->StaffPhone }}</td>
                                    </tr>
                
                                    <tr>
                                        <th scope="row">Address:</th>
                                        <td>{{ $staff->StaffAdd }}</td>
                                    </tr>
                
                                    <tr>
                                        <th scope="row">Mail:</th>
                                        <td>{{ $staff->StaffMail }}</td>
                                    </tr>
                
                                    <tr>
                                        <th scope="row">Salary:</th>
                                        <td>{{ $staff->StaffSalary }}</td>
                                    </tr>
                
                                    <tr>
                                        <th scope="row">Photo:</th>
                                        <td><img src="{{ asset('uploads/stafflist/'.$staff->StaffPic) }}" width="90px" height="70px"></td>
                                    </tr>
                
                                    <tr>
                                        <th scope="row">Status:</th>
                                        <td>
                                            @if($staff -> CurrentStaff==1)
                                            Active
                                            @else
                                            On hold
                                            @endif
                                        </td>
                                    </tr>
                                </table>
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





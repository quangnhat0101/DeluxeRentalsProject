<!-- lưu tại /resources/views/item/create.blade.php -->
@extends('layout.layout2')
@section('title', 'Create new staff')
@section('my content')
<div class="container" style="margin-top: 100px; margin-bottom: 100px">
<section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Create item</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <!--Chèn đoạn mã <form></form> vào đây-->
                         @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif 
                        <form method="POST" action="{{ url('staffupdate') }}" enctype="multipart/form-data">
                            @csrf
                            <table>
                                <tr>
                                    <td>StaffName:</td>
                                    <td><input name="txtsName" value="duc"></td>
                                </tr>

                                <tr>
                                    <td>StaffPass:</td>
                                    <td><input name="txtsPass" value="0147852"></td>
                                </tr>

                                <tr>
                                    <td>StaffDOB:</td>
                                    <td><input name="txtsDOB" value="1980/01/21"></td>
                                </tr>

                                <tr>
                                    <td>StaffPhone:</td>
                                    <td><input name="txtsPhone" value="0123456789"></td>
                                </tr>

                                <tr>
                                    <td>StaffAdd:</td>
                                    <td><input name="txtsAdd" value="Hai Phong"></td>
                                </tr>

                                <tr>
                                    <td>StaffMail:</td>
                                    <td><input name="txtsMail" value ="duc@gmail.com"></td>
                                </tr>

                                <tr>
                                    <td>StaffSalary:</td>
                                    <td><input name="txtsSalary" value="1200000"></td>
                                </tr>

                                <tr>
                                    <td>StaffPic:</td>
                                    <td><input type="file" name="txtsPic" ></td>
                                </tr>

                                <tr>
                                    <td>CurrentStaff:</td>
                                    
                                    <td><input name="txtsCurrent" value="1"></td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td><input type="submit" value="Add New"></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
</div>
   
@endsection

@section('script-section')
<script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function () {
        bsCustomFileInput.init();
    });
</script>

{{-- <script type="text/javascript">
    $('.date').datepicker({  
    format: 'mm-dd-yyyy'
    });  
</script> 
@endsection
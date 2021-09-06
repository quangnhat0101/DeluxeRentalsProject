<!-- lưu tại /resources/views/item/create.blade.php -->
@extends('layout.layout')
@section('title', 'item - create new')
@section('content')
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
                        <form method="POST" action="{{ url('driver/adddriverprocess') }}" enctype="multipart/form-data"> 
                            @csrf
                            <table>
                                                           
                                <tr>
                                    <td>DriverName:</td>
                                    <td><input name="txtdName" value="duc"></td>
                                </tr>

                                <tr>
                                    <td>DriverLience:</td>
                                    <td><input name="txtdLience" value="011166040887"></td>
                                </tr>

                                <tr>
                                    <td>DriverDOB:</td>
                                    <td><input name="txtdDOB" value="1980/01/21"></td>
                                </tr>

                                <tr>
                                    <td>DriverPhone:</td>
                                    <td><input name="txtdPhone" value="0123456789"></td>
                                </tr>

                                <tr>
                                    <td>DriverAdd:</td>
                                    <td><input name="txtdAdd" value="Hai Phong"></td>
                                </tr>

                                <tr>
                                    <td>DriverMail:</td>
                                    <td><input name="txtdMail" value ="duc@gmail.com"></td>
                                </tr>

                                <tr>
                                    <td>DriverPic:</td>
                                    <td><input type="file" name="txtdPic" ></td>
                                </tr>

                                <tr>
                                    <td>DriverStatus:</td>
                                    <td><input name="txtdStatus" value ="1"></td>
                                </tr>

                                <tr>
                                    <td>DriverCurent:</td>
                                    <td><input name="txtdCurent" value ="1"></td>
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
@endsection
@section('script-section')
    <script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            bsCustomFileInput.init();
        });
    </script>
@endsection
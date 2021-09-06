<!-- lưu tại /resources/views/item/create.blade.php -->
@extends('layout.layout')
@section('title', 'Update Item')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        {{-- <div class="card-header">
                            <h3 class="card-title">Update Item {{ ' ' . $rs -> Code }}</h3>
                        </div> --}}
                        <!-- /.card-header -->
                        <!-- form start -->
                        <!--Chèn đoạn mã <form></form> vào đây-->
                        <form method="POST" action="{{ url('driver/updatedriverprocess/'.$driver->DriverID) }}" enctype="multipart/form-data">
                            @csrf
                            <table>
                                <tr>
                                    <td>DriverName:</td>
                                    <td><input name="txtdName" value="{{ $driver->DriverName }}"></td>
                                </tr>

                                <tr>
                                    <td>DriverLience:</td>
                                    <td><input name="txtdLience" value="{{ $driver->DriverLience }}"></td>
                                </tr>

                                <tr>
                                    <td>DriverDOB:</td>
                                    <td><input name="txtdDOB" value="{{ $driver->DriverDOB }}"></td>
                                </tr>

                                <tr>
                                    <td>DriverPhone:</td>
                                    <td><input name="txtdPhone" value="{{ $driver->DriverPhone }}"></td>
                                </tr>

                                <tr>
                                    <td>DriverAdd:</td>
                                    <td><input name="txtdAdd" value="{{ $driver->DriverAdd }}"></td>
                                </tr>

                                <tr>
                                    <td>DriverMail:</td>
                                    <td><input name="txtdMail" value="{{ $driver->DriverMail }}"></td>
                                </tr>

                                <tr>
                                    <td>DriverPic:</td>
                                    <td><img src="{{ asset('img/'.$driver->DriverPic) }}" width="100px" height="70px"></td>
                                </tr>

                                <tr>
                                    <td>DriverStatus:</td>
                                    <td><input name="txtdStatus" value="{{ $driver->DriverStatus }}"></td>
                                </tr>

                                <tr>
                                    <td>CurentDriver:</td>
                                    <td><input name="txtdCurent" value="{{ $driver->CurentDriver }}"></td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td><input type="submit" value="Update"></td>
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
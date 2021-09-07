<!-- lưu tại /resources/views/item/create.blade.php -->
@extends('layout.layout2')
@section('title', 'Update Item')
@section('my content')
<div class="container" style="margin-top: 100px; margin-bottom: 100px">
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
                        <form method="POST" action="{{ url('staffupdate/'.$staff->StaffID) }}" enctype="multipart/form-data">
                            @csrf
                            <table>
                                <tr>
                                    <td>StaffName:</td>
                                    <td><input name="txtsName" value="{{ $staff->StaffName }}"></td>
                                </tr>

                                <tr>
                                    <td>StaffPass:</td>
                                    <td><input name="txtsPass" value="{{ $staff->StaffPass }}"></td>
                                </tr>

                                <tr>
                                    <td>StaffDOB:</td>
                                    <td><input name="txtsDOB" value="{{ $staff->StaffDOB }}"></td>
                                </tr>

                                <tr>
                                    <td>StaffPhone:</td>
                                    <td><input name="txtsPhone" value="{{ $staff->StaffPhone }}"></td>
                                </tr>

                                <tr>
                                    <td>StaffAdd:</td>
                                    <td><input name="txtsAdd" value="{{ $staff->StaffAdd }}"></td>
                                </tr>

                                <tr>
                                    <td>StaffMail:</td>
                                    <td><input name="txtsMail" value="{{ $staff->StaffMail }}"></td>
                                </tr>

                                <tr>
                                    <td>StaffSalary:</td>
                                    <td><input name="txtsSalary" value="{{ $staff->StaffSalary }}"></td>
                                </tr>

                                <tr>
                                    <td>StaffPic:</td>
                                    <td><img src="{{ asset('img/'.$staff->StaffPic) }}" width="100px" height="70px"></td>
                                </tr>

                                <tr>
                                    <td>CurrentStaff:</td>
                                    <td><input name="txtsCurrent" value="{{ $staff->CurrentStaff }}"></td>
                                </tr>
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
</div>
    
@endsection
@section('script-section')
    <script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            bsCustomFileInput.init();
        });
    </script>
@endsection
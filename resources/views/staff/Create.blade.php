<!-- lưu tại /resources/views/item/create.blade.php -->
@extends('layout.layout2')
@section('title', 'Create new staff')
@section('my content')
<div class="container" style="margin-top: 100px; margin-bottom: 100px">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-md-2 col-md-8">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Create new staff member</h3>
                        
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
                        </div>    
                        <div class="card-body">
                            <!-- Form start -->
                            <form method="post" action="{{ url('staffcreate') }}" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group">
                                    <label>Staff Name</label>
                                    <input type="text" class="form-control" name="txtsName" placeholder="Enter staff name">
                                </div>
                                <div class="form-group">
                                    <label>Staff Pass</label>
                                    <input type="number" class="form-control" name="txtsPass" placeholder="Enter staff password">
                                </div>
                                <div class="form-group">
                                    <label>Staff DoB</label>
                                    <input class="form-control" name="ticsDOB" placeholder="Enter staff DoB">
                                </div>
                                <div class="form-group">
                                    <label>Staff Phone Number</label>
                                    <input type="number" class="form-control" name="txtsPhone" placeholder="Enter staff phone number">
                                </div>
                                <div class="form-group">
                                    <label>Staff Address</label>
                                    <input type="text" class="form-control" name="txtsAdd" placeholder="Enter staff addressr">
                                </div>
                                <div class="form-group">
                                    <label>Staff Email</label>
                                    <input type="text" class="form-control" name="txtsMail" placeholder="Enter staff emailr">
                                </div>
                                <div class="form-group">
                                    <label>Staff Salary</label>
                                    <input type="number" class="form-control" name="txtsSalary" placeholder="Enter staff salary">
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="txtsCurrent">
                                    <label class="form-check-label" for="exampleCheck1">Current Staff</label>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label>Staff image</label>
                                    <input type="file" class="form-control" name="txtsPic">
                                </div>

                                <button type="submit" class="btn btn-primary">Create</button>
                                <a class ="btn btn-success" href="{{ url('staffindex') }}">Return to index</a>
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
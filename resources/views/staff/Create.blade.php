<!-- lưu tại /resources/views/item/create.blade.php -->
@extends('layout.layout2')
@section('title', 'Create new staff')
@section('my content')
<div class="container" style="margin-top: 100px; margin-bottom: 100px">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-md-2 col-md-8">

                    <div class="card bg-light">
                        <div class="card-header">
                            <h3 class="card-title">Create new staff member</h3>
                            @if(session('status'))
                                <h6>{{session('status')}}</h6>
                            @endif
                        </div>    

                        <!-- Input Error Display-->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.
                            </div>
                        @endif 

                        <div class="card-body">
                        <p class="text-danger font-weight-bold">*All fields are required.</p>
                            <!-- Form start -->
                            <form method="post" action="{{ url('staffcreate') }}" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group">
                                    <label>Staff Name</label>
                                    <input type="text" class="form-control" name="txtsName" placeholder="Enter staff name" value="{{ old('txtsName') }}">
                                    @if ($errors->has('txtsName'))
                                            <span class="text-danger">{{ $errors->first('txtsName') }}</span>
                                    @endif      
                                </div>
                                <div class="form-group">
                                    <label>Staff Pass</label>
                                    <input type="number" class="form-control" name="txtsPass" placeholder="Enter staff password" value="{{ old('txtsPass') }}">
                                    @if ($errors->has('txtsPass'))
                                            <span class="text-danger">{{ $errors->first('txtsPass') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Staff DOB</label>
                                    <input type="date" class="form-control" name="txtsDOB" placeholder="Enter staff DoB" value="{{ old('txtsDOB') }}">
                                    @if ($errors->has('txtsDOB'))
                                            <span class="text-danger">{{ $errors->first('txtsDOB') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Staff Phone Number</label>
                                    <input type="text" class="form-control" name="txtsPhone" placeholder="Enter staff phone number" value="{{ old('txtsPhone') }}">
                                    @if ($errors->has('txtsPhone'))
                                            <span class="text-danger">{{ $errors->first('txtsPhone') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Staff Address</label>
                                    <input type="text" class="form-control" name="txtsAdd" placeholder="Enter staff address" value="{{ old('txtsAdd') }}">
                                    @if ($errors->has('txtsAdd'))
                                            <span class="text-danger">{{ $errors->first('txtsAdd') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Staff Email</label>
                                    <input type="text" class="form-control" name="txtsMail" placeholder="Enter staff email" value="{{ old('txtsMail') }}">
                                    @if ($errors->has('txtsMail'))
                                            <span class="text-danger">{{ $errors->first('txtsMail') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Staff Salary</label>
                                    <input type="number" class="form-control" name="txtsSalary" placeholder="Enter staff salary" value="{{ old('txtsSalary') }}">
                                    @if ($errors->has('txtsSalary'))
                                            <span class="text-danger">{{ $errors->first('txtsSalary') }}</span>
                                    @endif
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" value="1" name="txtsCurrent" value="{{ old('txtsCurrent') }}" >
                                    <label class="form-check-label" for="exampleCheck1">Active</label>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label>Staff image</label>
                                    <input type="file" class="form-control" name="txtsPic" value="{{ old('txtsPic') }}">
                                    @if ($errors->has('txtsPic'))
                                            <span class="text-danger">{{ $errors->first('txtsPic') }}</span>
                                    @endif 
                                </div>

                                <button type="submit" class="btn btn-danger">Create</button>
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




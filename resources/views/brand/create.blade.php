@extends('layout.layout2')
@section('title','Create New Brand')
@section('my content')

<div class="container" style="margin-top: 100px; margin-bottom: 100px">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-md-2 col-md-8">
                    <div class="card bg-light"> <!--card start-->  

                        <div class=card-header>
                            <h1>NEW BRAND INFORMATION</h1>
                        </div>

                        <div class="card-body">
                            <form method="post" action="{{ url('brandcreate') }}" enctype="multipart/form-data">
                                @csrf
                                    <div class="form-group">
                                        <label>Brand Name</label>
                                        <input type="text" class="form-control" name="txtName" placeholder="Enter brand name">
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control" name="txtAddress" placeholder="Enter brand address">
                                    </div>
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="number" class="form-control" name="txtPhone" placeholder="Enter brand phone">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" name="txtEmail" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label>Fax</label>
                                        <input type="text" class="form-control" name="txtFax" placeholder="Enter brand fax">
                                    </div>
                                    <div class="form-group">
                                        <label>Logo</label>
                                        <input type="file" class="form-control" name="logoPic">
                                    </div>

                                    <button type="submit" class="btn btn-danger">Create</button>
                                    <a class ="btn btn-dark" href="{{ url('brandindex') }}">Return to index</a>
                            </form>
                        </div>

                    </div>   <!--card end-->                                    
                </div>
            </div>
        </div>
    </section>
</div>
    
@endsection 


    

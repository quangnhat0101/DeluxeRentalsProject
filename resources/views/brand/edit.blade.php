@extends('layout.layout2')
@section('title','Update Brand Information')
@section('my content')

<div class="container" style="margin-top: 100px; margin-bottom: 100px">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-md-2 col-md-8">
                    <div class="card bg-light"> <!--card start--> 

                        <div class="card-header">
                            <h1>Edit Brand</h1>
                        </div>

                        <div class="card-body">
                            <form method="post" action="{{ url('brandupdate/'.$brandlist->BrandID) }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Brand Name</label>
                                    <input type="text" class="form-control" name="txtName" value="{{ $brandlist->BrandName }}">
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" name="txtAddress" value="{{ $brandlist->BrandAdd }}">
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" name="txtPhone" value="{{ $brandlist->BrandPhone }}">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="txtEmail" value="{{ $brandlist->BrandMail }}">
                                </div>        
                                <div class="form-group">
                                    <label>Fax</label>
                                    <input type="text" class="form-control" name="txtFax" value="{{ $brandlist->BrandFax }}">
                                </div>
                                <div class="form-group">
                                    <label>Brand Logo</label>
                                    <img src="{{ asset('uploads/brandlist/'.$brandlist->BrandLogo) }}" width="70px" height="70px" alt="BrandImage">
                                    <input type="file" class="form-control" name="logoPic">
                                </div>

                                <button type="submit" class="btn btn-danger">Update</button>
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
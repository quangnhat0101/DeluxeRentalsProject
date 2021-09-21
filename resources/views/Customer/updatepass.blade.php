@extends('layout.layout2')
@section('title','Update Customer Password')
@section('my content')

  <div class="container" style="margin-top: 100px; margin-bottom: 100px">
        
        <div class="offset-md-2 col-md-8">
                <div class="card">
                    <div class="card-header"> <h1>Password Update</h1></div>
                    @if (session('error'))
                        <span class="alert alert-danger">
                            <strong>{{ session()->get('error') }}</strong>
                        </span>
                    @endif
                    @if(session('success'))
                        <span class="alert alert-success">
                            <strong>{{ session()->get('success') }}</strong>
                        </span>
                    @endif
                    <div class="card-body">
                        <form method="POST" action="{{ url('customerpassupdate/'.$customerlist->id) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Current Password</label>
                                <div class="col-md-6">
                                    <input type="password" class="form-control @error('current_password') is-invalid @enderror" name="current_password" autocomplete="current_password">
                                    @error('current_password')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">New Password</label>
                                <div class="col-md-6">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="password">
                                    @error('password')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password Confirmation</label>
                                <div class="col-md-6">
                                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" autocomplete="password_confirmation">
                                    @error('password_confirmation')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-danger">
                                        Change Password
                                    </button>
                                    <a href="{{ url('myprofile') }}" class="btn btn-dark">Cancel</a>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                </div>
                
        </div>  
    </div>
    
@endsection 
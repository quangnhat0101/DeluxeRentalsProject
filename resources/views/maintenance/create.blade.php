@extends('layout.layout2')
@section('title', 'Create Maintenance Report')
@section('my content')

<div class="container" style="margin-top: 100px; margin-bottom: 100px">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-md-2 col-md-8">

                    <div class="card bg-light">
                        <div class="card-header">
                            <h3 class="card-title">Create new maintenance report</h3>
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

                            <form method="post" action="{{ url('maintenancecreate') }}" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group">
                                    <label>Date</label>
                                    <input type="date" class="form-control" name="txtDate" placeholder="Enter Date">
                                </div>
                                <div class="form-group">
                                    <label>Car Plate</label>
                                    <input type="text" class="form-control" name="txtCarPlate" placeholder="Enter CarPlate">
                                </div>
                                <div class="form-group">
                                    <label>Comment</label>
                                    <textarea type="comment" class="form-control" name="txtComment" placeholder="Enter Comment" ></textarea>
                                </div>
                                <button type="submit" class="btn btn-danger">Create</button>
                                <a class ="btn btn-dark" href="{{ url('maintenanceindex') }}">Return to index</a>
                            </form>
                        </div>                          
                    </div>                    
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
@extends('layout.layout2')
@section('title', 'Update Maintenance Report')
@section('my content')

<div class="container" style="margin-top: 100px; margin-bottom: 100px">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-md-2 col-md-8">
                    <!-- general form elements -->
                    <div class="card bg-light">
                        <div class="card-header">
                            <h1 class="card-title">Update Maintenance Report</h1>
                            @if(session('status'))
                                <h6>{{session('status')}}</h6>
                            @endif
                        </div>                         
                         @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            </div>
                        @endif     
   
                        <div class="card-body">
                            <!-- Form start -->
                            <form method="post" action="{{ url('maintenanceupdate/'.$maintenancelist->MaintenanceID) }}" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group">
                                    <label>Date</label>
                                    <input type="date" class="form-control" name="txtDate" value="{{ $maintenancelist->MaintenanceDate }}">
                                </div>
                                <div class="form-group">
                                    <label>Car</label>
                                    <input type="text" class="form-control" name="txtCarPlate" value="{{ $maintenancelist->CarPlate }}">
                                </div>
                                <div class="form-group">
                                    <label>Comment</label>
                                    <input type="text" class="form-control" name="txtComment" value="{{ $maintenancelist->Comment }}">
                                </div>
                                <button type="submit" class="btn btn-danger">Update</button>
                                <a class ="btn btn-dark" href="{{ url('maintenanceindex') }}">Return to index</a>
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







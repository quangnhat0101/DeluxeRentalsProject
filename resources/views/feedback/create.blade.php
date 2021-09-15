@extends('layout.layout2')
@section('title', 'Create Feedback')
@section('my content')
<div class="container" style="margin-top: 100px; margin-bottom: 100px">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-md-2 col-md-8">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            @if(session('success'))
                                <h6>{{session('success')}}</h6>
                            @endif
                            <h3 class="card-title">NEW FEEDBACK CREATION</h3>
                            
                        </div>
                        <div class="card-body">
                        <form method="post" action="{{ url('feedbackcreate') }}" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                                <label>Driver Attitude</label>
                                <input type="number" class="form-control" name="txtAtt" placeholder="Rate Driver Attitude from 1-5">
                            </div>
                            <div class="form-group">
                                <label>Driver Punctuality</label>
                                <input type="number" class="form-control" name="txtPunc" placeholder="Rate Driver Punctuality from 1-5">
                            </div>
                            <div class="form-group">
                                <label>Reasonable Price</label>
                                <input type="number" class="form-control" name="txtReaPri" placeholder="Rate Pricing from 1-5">
                            </div>
                            <div class="form-group">
                                <label>More Comment/label>
                                <input type="text" class="form-control" name="txtComment" placeholder="More comments">
                            </div>                            
                            <button type="submit" class="btn btn-primary">Submit</button>
                            
                        </form>
                        </div>                        

                    </div>                    
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
</div>
   
@endsection
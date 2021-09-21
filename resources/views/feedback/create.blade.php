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
                            <h3 class="card-title">NEW FEEDBACK</h3>
                            
                        </div>
                        <div class="card-body">
                        <form method="post" action="{{ url('feedbackcreate') }}" enctype="multipart/form-data">
                        @csrf
                        @foreach($mycontract as $contract)
                            <div class="form-group">
                                <label>Contract Number</label>
                                <input type="text" class="form-control" name="txtContractNo" value="{{$contract->ContractNo}}" readonly>
                            </div>
                            <div class="form-group">
                                <label>Customer ID</label>
                                <input type="text" class="form-control" name="txtCusID" value="CUS00{{$contract->CusID}}" readonly>
                            </div>
                        @endforeach
                            <div class="form-group">
                                <label><b> Driver Attitude</b></label>
                                <div class="rating-css">
                                    <div class="star-icon">
                                        <div style="display: inline; margin-right: 5%" >
                                            <input type="radio" value="1" name="att_rating" id="att_rating">
                                            <label for="att_rating" >Terrible</label>
                                        </div>
                                        <div style="display: inline; margin-right: 5%">
                                            <input type="radio" value="2" name="att_rating" id="att_rating">
                                            <label for="att_rating" >Bad</label>
                                        </div>
                                        <div style="display: inline; margin-right: 5%">
                                            <input type="radio" value="3" name="att_rating" checked id="att_rating">
                                            <label for="att_rating" >Okay</label>
                                        </div>
                                        <div style="display: inline; margin-right: 5%">
                                            <input type="radio" value="4" name="att_rating" id="att_rating">
                                            <label for="att_rating" >Great</label>
                                        </div>
                                        <div style="display: inline; margin-right: 5%">
                                            <input type="radio" value="5" name="att_rating" id="att_rating">
                                            <label for="att_rating" >Wonderful</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label><b>Driver Punctuality</b> </label>
                                <div class="rating-css">
                                    <div class="star-icon">
                                        <div style="display: inline; margin-right: 5%" >
                                            <input type="radio" value="1" name="punc_rating" id="punc_rating">
                                            <label for="punc_rating" >Terrible</label>
                                        </div>
                                        <div style="display: inline; margin-right: 5%">
                                            <input type="radio" value="2" name="punc_rating" id="punc_rating">
                                            <label for="punc_rating" >Bad</label>
                                        </div>
                                        <div style="display: inline; margin-right: 5%">
                                            <input type="radio" value="3" name="punc_rating" checked id="punc_rating">
                                            <label for="punc_rating" >Okay</label>
                                        </div>
                                        <div style="display: inline; margin-right: 5%">
                                            <input type="radio" value="4" name="punc_rating" id="punc_rating">
                                            <label for="punc_rating" >Great</label>
                                        </div>
                                        <div style="display: inline; margin-right: 5%">
                                            <input type="radio" value="5" name="punc_rating" id="punc_rating">
                                            <label for="punc_rating" >Wonderful</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label><b> Reasonable Price</b></label>
                                <div class="rating-css">
                                    <div class="star-icon">
                                        <div style="display: inline; margin-right: 5%" >
                                            <input type="radio" value="1" name="price_rating" id="price_rating">
                                            <label for="price_rating" >Terrible</label>
                                        </div>
                                        <div style="display: inline; margin-right: 5%">
                                            <input type="radio" value="2" name="price_rating" id="price_rating">
                                            <label for="price_rating" >Bad</label>
                                        </div>
                                        <div style="display: inline; margin-right: 5%">
                                            <input type="radio" value="3" name="price_rating" checked id="price_rating">
                                            <label for="price_rating" >Okay</label>
                                        </div>
                                        <div style="display: inline; margin-right: 5%">
                                            <input type="radio" value="4" name="price_rating" id="price_rating">
                                            <label for="price_rating" >Great</label>
                                        </div>
                                        <div style="display: inline; margin-right: 5%">
                                            <input type="radio" value="5" name="price_rating" id="price_rating">
                                            <label for="price_rating" >Wonderful</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Other comments</label>
                                <textarea style="resize: none;" class="form-control" rows="5" name="txtComment" placeholder="Enter your comment"></textarea>
                            </div>                            
                            <button type="submit" class="btn btn-danger">Submit</button>
                            <a href="{{ url('myprofile') }}" class="btn btn-dark">Return</a>
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
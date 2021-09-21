@extends('layout.layout2')
@section('title','Feedback Index')
@section('my content')
<div class="container" style="margin-top: 100px; margin-bottom: 100px">

    <div class="row">
            <h1>List of feedbacks</h1>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Contract Number</th>
                    <th>Customer ID</th>
                    <th>Driver Attitude</th>
                    <th>Driver Punctuality</th>
                    <th>Reasonable Price</th>
                    <th>More Comments</th>
                    <th colspan=2>Function</th>

                </tr>
            </thead>    
            
            <tbody>
                @foreach($feedbacklist as $list)
                <tr>
                    <td>{{ $list -> FeedbackID }}</td>
                    <td>{{ $list -> ContractNo }}</td>
                    <td>CUS00{{ $list -> Cus_ID }}</td>
                    <td>{{ $list -> DriverAttitude }}</td>
                    <td>{{ $list -> Punctuality }}</td>
                    <td>{{ $list -> ReasonalPrice }}</td>
                    <td>{{ $list -> Comment }}</td>
                    <td>
                        <a href="{{ url('feedbackdelete/'.$list->FeedbackID) }}" class="btn btn-danger btn-sm" onclick = "return confirm('Are you sure to delete car {{$list->CarPlate}}? ')">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            
        </table>

    </div>
        
</div>

@endsection
        
    

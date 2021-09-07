@extends('layout.layout2')
@section('title','Car Index')
@section('my content')
<div class="container" style="margin-top: 100px; margin-bottom: 100px">

<h1>List of Cars</h1>
        <h3><a href="{{ url('/carcreate') }}">Create new item</a></h3>
        <table class="table table-bordered">
            <thread class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Car Brand</th>
                    <th>Car Type</th>
                    <th>Car Plate</th>
                    <th>Car Price</th>
                    <th>Image</th>
                    <th colspan=2>Function</th>

                </tr>
            </thread>    
            
            <tbody>
                @foreach($carlist as $list)
                <tr>
                    <td>{{ $list -> CarID }}</td>
                    <td>{{ $list -> CarBrand }}</td>
                    <td>{{ $list -> CarType }}</td>
                    <td>{{ $list -> CarPlate }}</td>
                    <td>{{ $list -> CarPrice }}</td>
                    <td>
                        <img src="{{ asset('uploads/carlist/'.$list->CarPic) }}" width="130x" height="70px" alt="CarImage">
                    </td>
                    <td>
                        <a href="{{ url('carupdate/'.$list->CarID) }}" class="btn btn-primary btn-sm">Edit</a>
                    </td>
                    <td>
                        <a href="{{ url('cardelete/'.$list->CarID) }}" class="btn btn-danger btn-sm" onclick = "return confirm('Are you sure to delete car {{$list->CarPlate}}? ')">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            
        </table>
</div>

@endsection
        
    

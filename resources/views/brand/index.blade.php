@extends('layout.layout2')
@section('title','Brand Index')
@section('my content')

<div class="container small-index text-center">
    <a href=" {{ url('carindex') }} " title="Car Index"><i class="bx bx-car"></i></a><span style="color: #e43c5c"> |</span>   
    <a href=" {{ url('driverindex') }} " title="Driver Index"><i class="bx bx-run"></i></a><span style="color: #e43c5c"> |</span>
    <a href=" {{ url('staffindex') }} " title="Staff Index"><i class="bx bx-group"></i></a><span style="color: #e43c5c"> |</span>
    <a href=" {{ url('customerindex') }} " title="Customer Index"><i class="bx bx-cart-alt"></i></a><span style="color: #e43c5c"> |</span>
    <a href=" {{ url('feedbackindex') }} " title="Feedback Index"><i class="bx bx-user-voice"></i></a><span style="color: #e43c5c"> |</span>
    <a href=" {{ url('contractindex') }} " title="Contract Index"><i class="bx bx-file"></i></a><span style="color: #e43c5c"> |</span>
    <a href=" {{ url('maintenanceindex') }} " title="Maintenance Index"><i class="bx bx-cog"></i></a><span style="color: #e43c5c"> |</span> 
    <a href=" {{ url('brandindex') }} " title="Brand Index"><i class="bx bx-purchase-tag"></i></a>           
</div>

<div class="container" style="margin-top: 70px; margin-bottom: 100px">
    <div >
    @if(session('status'))
    <h3 style="color:red">{{session('status')}}</h3>
    @endif
    </div>
    <h1 style="text-align: center; color: #e43c5c">BRAND INDEX</h1>
        <h3><a href="{{ url('brandcreate') }}" class="btn btn-danger">Add New Brand</a></h3>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr style="text-align: center">
                    <th>ID</th>
                    <th>Brand Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Fax</th>
                    <th>Email</th>
                    <th>Logo</th>
                    <th colspan=2 >Function</th>

                </tr>
            </thead>    
            
            <tbody>
                @foreach($brandlist as $list)
                <tr>
                    <td>BRD00{{ $list -> BrandID }}</td>
                    <td>{{ $list -> BrandName }}</td>
                    <td>{{ $list -> BrandAdd }}</td>
                    <td>{{ $list -> BrandFax}}</td>
                    <td>{{ $list -> BrandPhone }}</td>
                    <td>{{ $list -> BrandMail }}</td>
                    <td>
                        <img src="{{ asset('uploads/brandlist/'.$list->BrandLogo) }}" width="70x" height="70px" alt="BrandImage">
                    </td>
                    <td>
                        <a href="{{ url('brandupdate/'.$list->BrandID) }}" class="btn btn-dark btn-sm">Edit</a>
                    </td>
                    <td>
                        <a href="{{ url('branddelete/'.$list->BrandID) }}" class="btn btn-danger btn-sm" 
                        onclick = "return confirm('Are you sure to delete data of {{$list -> BrandName}}')">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            
        </table>
</div>

@endsection
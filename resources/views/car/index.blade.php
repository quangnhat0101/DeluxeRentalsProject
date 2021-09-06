<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Style sheet -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Script -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <title>Car Index</title>
    </head>
    <body class="container">
        <h1>List of Cars</h1>
        <h3><a href="{{ url('car/addcar') }}">Create new item</a></h3>
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
                        <a href="{{ url('car/editcar/'.$list->CarID) }}" class="btn btn-primary btn-sm">Edit</a>
                    </td>
                    <td>
                        <a href="{{ url('car/deletecar/'.$list->CarID) }}" class="btn btn-danger btn-sm" onclick = "return confirm('Are you sure to delete car {{$list->CarPlate}}? ')">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            
        </table>
    
    </body>
</html>
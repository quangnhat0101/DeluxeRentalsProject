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
        <title>Add new car</title>
    </head>

    <body class="container" style="width: 35%">
        @if(session('status'))
            <h6>{{session('status')}}</h6>
        @endif
        <h1>NEW CAR INFORMATION</h1>
        <a href="{{ url('car/index') }}">Return to index</a>
        <br>
        <br>
        <form method="post" action="{{ url('car/addcar') }}" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
                <label>Car Brand</label>
                <input type="text" class="form-control" name="txtBrand" placeholder="Enter car brand">
            </div>
            <div class="form-group">
                <label>Car Type</label>
                <input type="text" class="form-control" name="txtType" placeholder="Enter car type">
            </div>
            <div class="form-group">
                <label>Car Plate</label>
                <input type="text" class="form-control" name="txtPlate" placeholder="Enter car plate">
            </div>
            <div class="form-group">
                <label>Car Price per day</label>
                <input type="number" class="form-control" name="txtPrice" placeholder="Enter car price">
            </div>
            <div class="form-group">
                <label>Car Image</label>
                <input type="file" class="form-control" name="CarPic">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </body>
</html>
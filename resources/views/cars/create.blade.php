<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css" /> 
    <title>Add Car Page</title>
</head>
<body class="create">

<nav style="height: 50px; width: 100vw; background: #0c63e4; display: flex">
    <a href="/cars" style="margin-top: 7px; margin-left: 10px;"> <button style="height: 34px;">All Cars List</button></a>
</nav>

<br/>

<form method="POST" action="/cars" enctype="multipart/form-data">
    <!-- {{method_field('post')}} -->
    @csrf
    <input type="text" name="model" placeholder="car model ..." required/> <br/>
    <input type="number" name="production_year" placeholder="production year ..." required/> <br/>
    <input type="text" name="price" placeholder="price ..." required/> <br/>
    <input type="text" name="description" placeholder="description about the car ..." required/> <br/>
     
    <!-- <input type="file" name="image"  /> -->
    <button class="btn" type="submit" value="submit">Submit</button>
</form>

@if($errors->any())
    <div>
        @foreach($errors->all() as $error)
            <li>
                {{$error}}
            </li>
        @endforeach
    </div>
@endif


</body>
</html>

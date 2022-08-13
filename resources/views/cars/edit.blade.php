<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css" /> 
    <title>Update Car</title>
</head>
<body class="body">

<nav style="height: 50px; width: 100vw; background: #0c63e4; display: flex">
    <a href="/cars" style="margin-top: 7px; margin-left: 10px;"> <button style="height: 34px;">All Cars List</button></a>
</nav>

<br/>

<form method="POST" action="/cars/{{$auto->id}}" enctype="multipart/form-data">
    
        <h1>Update</h1>
   
    <!-- {{method_field('post')}} -->
    @csrf
    @method('PUT')
    <input type="text" name="model"  value="{{$auto->model}}" /> <br/>
    <input type="number" name="production_year" value="{{$auto->production_year}}"/> <br/>
    <input type="text" name="price" value="{{$auto->price}}"/> <br/>
    <input type="text" name="description" value="{{$auto->description}}"/> <br/>
     
    <!-- <input type="file" name="image"  /> -->
    <button class="btn" type="submit" value="submit">Update</button>
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

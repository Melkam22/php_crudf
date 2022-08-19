<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css" /> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" integrity="sha384-xeJqLiuOvjUBq3iGOjvSQSIlwrpqjSHXpduPd6rQpuiM3f5/ijby8pCsnbu5S81n" crossorigin="anonymous"></nav>
    <title>Update Car</title>
</head>
<body class="body">

<nav style="height: 50px; width: 100vw; background: #0c63e4; display: flex">
    <a href="/cars" style="margin-top: 7px; margin-left: 10px;"> <button style="height: 34px;">All Cars List</button></a>
</nav>

<br/>

<form method="POST" action="/cars/{{$auto->id}}" enctype="multipart/form-data">
    <div style="width: 60%; margin-left: 20%; display: flex; flex-direction: column; align-items:center">
    <h1>Update</h1>
   
   <!-- {{method_field('post')}} -->
   @csrf
   @method('PUT')
   <input type="file" name="image" style="width: 300px; height: 35px"/> <br/>
   <input type="text" name="model"  value="{{$auto->model}}" style="width: 300px; height: 35px"/> <br/>
   <input type="number" name="production_year" value="{{$auto->production_year}}" style="width: 300px; height: 35px"/> <br/>
   <input type="text" name="price" value="{{$auto->price}}" style="width: 300px; height: 35px"/> <br/>
   <input type="text" name="description" value="{{$auto->description}}" style="width: 300px; height: 35px"/> <br/>
    
   <!-- <input type="file" name="image"  /> -->
   <button class="btn" type="submit" value="submit" style="width: 300px; margin-top: 4px; height: 50px; background: rgba(12,121,32,.5); border: none; font-size: 18px;">Update</button>
    </div>
         
</form>

@if($errors->any())
    <div>
        @foreach($errors->all() as $error)
            <li style="color: red; display: flex; justify-content: center; margin-top: 1%;">
                {{$error}}
            </li>
        @endforeach
    </div>
@endif


</body>
</html>

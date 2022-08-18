<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css" /> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" integrity="sha384-xeJqLiuOvjUBq3iGOjvSQSIlwrpqjSHXpduPd6rQpuiM3f5/ijby8pCsnbu5S81n" crossorigin="anonymous"></nav>
    <title>Home Page</title>
</head>
<body class="body">
<div>
    <h1 style="display: flex; justify-content: center; margin-top: 2%;">Welcome to <i class="bi bi-car-front" style="margin-left: 7px; margin-right: 7px;color: green;"></i> Page</h1>
</div>

<br/>

<!-- search bar -->
<form class="searchBar" action="{{url('/search')}}" type="get" style="margin-left: 20px;">
    <input class="searchInput" type="text" name="query" placeholder="filter by car model ...">
    <button class="searchBtn">Filter</button>  
</form> <br>


<!-- create car btn -->
<div style="height: 50px; width: 100vw; background: #0c63e4; display: flex">
    <a href="/cars/create" style="margin-top: 7px; margin-left: 10px;"> <button style="height: 34px; border: none">Add <i class="bi bi-car-front" style="margin-left: 7px; color: green; font-size: 22px;"></i></button></a>
</div>


<!-- foreach loop -->
 
@foreach($autos as $auto)
 
<div class="eachAuto">
<h2 style="margin-left: 20px;">{{$auto->model}}</h2>
<h4 style="margin-left: 20px;">{{$auto->production_year}}</h4>
<h4 style="margin-left: 20px;">{{$auto->price}}</h4>
<p style="margin-left: 20px; padding: 0% 2% 1% 0%;">{{$auto->description}}</p>
 

<!-- create edit button -->
<div class="frame">

<div class="edit">
    <a href="cars/{{$auto->id}}/edit"><i class="bi-pencil-fill"></i></a>
</div>

<form class="delete" action="cars/{{$auto->id}}" method="POST">
    @csrf
    @method('delete')
    <button type="submit"><i class="bi-trash3-fill"></i></button>
</form>  

</div> <br>

</div>

@endforeach

<!-- to top  -->
<a href="#top"><i style='font-size: 40px; margin-left: 3%; position: fixed; bottom: 30px;' class="bi bi-arrow-up-circle-fill"></i></a>

</body>
</html>




 


 
 
 
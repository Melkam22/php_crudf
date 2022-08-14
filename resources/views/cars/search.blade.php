<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/app.css" /> 
  <title>Search Page</title>
</head>
<body>
<div>
    <h1 style="display: flex; justify-content: center; margin-top: 2%;">welcome to Cars Page</h1>
</div>

<br/>

<!-- search bar -->
<!-- <form action="{{url('/search')}}" type="get" style="margin-left: 20px;">
    <input type="text" name="query" placeholder="filter by car model ...">
    <button class="searchBtn">Filter</button>
</form> -->


<!-- <nav style="height: 50px; width: 100vw; background: #0c63e4; display: flex">
    <a href="cars/create" style="margin-top: 7px; margin-left: 10px;"> <button style="height: 34px;">Add New Car</button></a>
</nav> -->

<!-- foreach loop -->
 
@foreach($autos as $auto)
 <h2>Result Count:</h2>
 <p>{{$autos->count()}}</p>
<div class="eachAuto">
<h2 style="margin-left: 20px;">{{$auto->model}}</h2>
<h5 style="margin-left: 20px;">{{$auto->production_year}}</h5>
<h5 style="margin-left: 20px;">{{$auto->price}}</h5>
<h5 style="margin-left: 20px;">{{$auto->description}}</h5>
 

<!-- create edit button -->
<div class="frame">

<div class="edit">
    <a href="cars/{{$auto->id}}/edit">Edit Car</a>
</div>

<form class="delete" action="cars/{{$auto->id}}" method="POST">
    @csrf
    @method('delete')
    <button type="submit">Delete Car</button>
</form>

</div>

</div>

@endforeach

</body>
</html>
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

<nav style="height: 50px; width: 100vw; background: #0c63e4; display: flex">
    <a href="/cars" style="margin-top: 7px; margin-left: 10px;"> <button style="height: 34px;">All <i class="bi bi-car-front" style="margin-left: 7px;"> List</button></a>
</nav>

<!-- found result count -->
  <h2 style="color: blue;">Filtered Result Count:  {{$autos->count()}}</h2>  
 
  <!-- foreach loop -->
@foreach($autos as $auto)
  
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
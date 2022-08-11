<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css" /> 
    <title>Home Page</title>
</head>
<body class="body">
<div>
    <h1 style="display: flex; justify-content: center; margin-top: 2%;">welcome to Cars Page</h1>
</div>

<br/>

<nav style="height: 50px; width: 100vw; background: #0c63e4; display: flex">
    <a href="create" style="margin-top: 7px; margin-left: 10px;"> <button style="height: 34px;">Add New Car</button></a>
</nav>

<!-- foreach loop -->
@foreach($autos as $auto)
<h2 style="margin-left: 20px;">{{$auto->model}}</h2>
 <h5 style="margin-left: 20px;">{{$auto->production_year}}</h5>
<h5 style="margin-left: 20px;">{{$auto->price}}</h5>
<h5 style="margin-left: 20px;">{{$auto->description}}</h5>
@endforeach


</body>
</html>




 


 
 
 
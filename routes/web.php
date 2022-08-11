<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;




// Route::get('/', function () {
//     return view('cars');
// });

Route::get('/cars',[CarsController::class, 'index']);

//Route::resource('/cars', CarsController::class);

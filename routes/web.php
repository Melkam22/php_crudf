<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;




// Route::get('/', function () {
//     return view('cars');
// });

Route::get('/',[CarsController::class, 'index']);
Route::get('/create',[CarsController::class, 'create']);

//Route::resource('/cars', CarsController::class);

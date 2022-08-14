<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\CarsController;




// Route::get('/', function () {
//     return view('cars');
// });

//Route::resource('', CarsController::class);
Route::resource('/cars', CarsController::class);//['except' => ['create', 'edit']]
Route::resource('/create', CarsController::class);
Route::resource('/edit', CarsController::class);

Route::get('/search', 'CarsController@search');



 


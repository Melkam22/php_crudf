<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\CarsController;




// Route::get('/', function () {
//     return view('cars');
// });

//Route::resource('', CarsController::class);
Route::resource('/cars', CarsController::class);//['except' => ['create', 'edit']]
Route::resource('/create', CarsController::class);
Route::resource('/edit/{id}', CarsController::class);
//Route::get('/create', [CarsController::class, 'submit']);

//Route::get('/', [CarsController::class, 'index']);
//Route::post('/create', [CarsController::class, 'create']);

 


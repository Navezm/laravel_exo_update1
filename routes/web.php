<?php

use App\Http\Controllers\AnimalController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [AnimalController::class,'index']);
Route::get('/create', [AnimalController::class,'create']);
Route::get('/showAnimal/{id}', [AnimalController::class,'show']);
Route::post('/addAnimal', [AnimalController::class,'store']);
Route::post('/deleteAnimal/{id}', [AnimalController::class,'destroy']);
Route::get('/editAnimal/{id}', [AnimalController::class,'edit']);
Route::post('/updateAnimal/{id}', [AnimalController::class,'update']);
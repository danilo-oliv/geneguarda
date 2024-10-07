<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AnimalController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/greetings', function () {
    return 'Hello World';
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});




 
Route::get('/animal', [AnimalController::class, 'showAll']);

Route::get('/animal/proprietario/{id}', [AnimalController::class, 'getByProprietario']);
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\ProprietarioController;
use App\Models\Proprietario;

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

Route::post('/animal', [AnimalController::class, 'store']);

Route::get('/proprietario', [ProprietarioController::class, 'showAll']);

Route::post('/proprietario', [ProprietarioController::class,'store']);
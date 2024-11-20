<?php

use App\Http\Controllers\MaterialDoadorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\EmbriaoController;
use App\Http\Controllers\MaterialDoadoraController;
use App\Http\Controllers\ProprietarioController;
use App\Models\MaterialDoador;
use App\Models\MaterialDoadora;
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


/** ANIMAL */

#Lista todos animais
Route::get('/animal', [AnimalController::class, 'showAll']);
#Lista animais por proprietario
Route::get('/animal/proprietario/{id}', [AnimalController::class, 'getByProprietario']);
#Lista doadoras por id do proprietario
Route::get('/animal/doadoras/{id}', [AnimalController::class, 'getDoadoras']);
#Lista doadores por id do proprietario
Route::get('/animal/doadores/{id}', [AnimalController::class, 'getDoadores']);
#Grava um animal, conferir params via get
Route::post('/animal', [AnimalController::class, 'store']);

/** PROPRIETARIO */

#Lista todos proprietarios
Route::get('/proprietario', [ProprietarioController::class, 'showAll']);
#Grava yum proprietario, conferir params via get
Route::post('/proprietario', [ProprietarioController::class,'store']);


/** MATERIAL GENETICO */

/** macho */

#Lista todos os materiais (semen)
Route::get('/doador', [MaterialDoadorController::class, 'getAll']);
#Lista materiais por id do animal macho
Route::get('/doador/{id}', [MaterialDoadorController::class, 'getDoadorByID']);
#Grava uma coleta de material (macho)
Route::post('/materialdoador', [MaterialDoadorController::class, 'store']);

/** femea */

#Lista todos os materiais (oocitos)
Route::get('/doadora', [MaterialDoadoraController::class, 'getAll']);
#Lista materiais por id do animal femea
Route::get('/doadora/{id}', [MaterialDoadoraController::class, 'getDoadorByID']);
#Grava uma coleta de material (femea)
Route::post('/materialdoadora', [MaterialDoadoraController::class, 'store']);

/** EMBRIAO */
#Lista todos embrioes
Route::get('/embriao', [EmbriaoController::class, 'getAll']);
#Lista embrioes por proprietario
Route::get('/embriao/proprietario/{id}', [EmbriaoController::class, 'showByProprietario']);
#Grava um embriao
Route::post('/embriao', [EmbriaoController::class, 'store']);
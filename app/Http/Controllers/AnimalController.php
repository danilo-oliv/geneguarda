<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Animal::create($request->all());
        //$animal->save();

    }

    /**
     * Display the specified resource.
     */
    public function show(Animal $animal)
    {
        //
    }

    public function showAll(){
        $response = Animal::all();
        return response()->json($response);
    }

    public function getByProprietario($id_proprietario){
        //var_dump($id_proprietario);
        $animais = Animal::where('id_proprietario','=', intval($id_proprietario))->get();
        //var_dump($animais);
        return response()->json($animais);
    }

    public function getDoadoras($id_proprietario){
        $doadoras = Animal::where('sexo', '=', 'f')->where('id_proprietario','=', intval($id_proprietario))->get();
        return response()->json($doadoras);
    }

    public function getDoadores($id_proprietario){
        $doadores = Animal::where('sexo', '=', 'm')->where('id_proprietario','=', intval($id_proprietario))->get();
        return response()->json($doadores);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Animal $animal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($animalID)
    {
        $animal = Animal::findOrFail($animalID);
        $animal->delete();
    }
}

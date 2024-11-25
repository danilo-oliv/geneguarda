<?php

namespace App\Http\Controllers;
use App\Models\MaterialDoador;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MaterialDoadorController extends Controller
{
    //
    public function getAll() {
        $doadoras = MaterialDoador::all();
        return response()->json($doadoras);
    }

    public function getDoadorByID($id_doador) {
        $response = MaterialDoador::where('id_animal', '=', $id_doador)->get();
        
        return response()->json($response);
    }

    public function store(Request $request) {
        MaterialDoador::create([
            'quantidade' => $request->quantidade,
            'id_animal' => $request->id_animal
        ]);
    }
}

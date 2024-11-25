<?php

namespace App\Http\Controllers;

use App\Models\Embriao;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmbriaoController extends Controller
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
        Embriao::create(
            [
                'id_macho' => $request->id_macho,
                'id_femea' => $request->id_femea,
                'data_fecundacao' => $request->data_fecundacao,
                'data_congelamento' => $request->data_congelamento ?? null,
                'data_descongelamento' => $request->data_descongelamento ?? null
            ]);
    }

    /**
     * Display the specified resource.
     */
    public function showByProprietario($id_proprietario)
    {
        $response = Embriao::join('animal', 'embriao.id_femea', '=', 'animal.id_animal')
        ->join('proprietario', 'animal.id_proprietario', '=', 'proprietario.id_proprietario')
        ->where('proprietario.id_proprietario', '=',$id_proprietario)
        ->select('embriao.*', 'proprietario.*')
        ->get();
        return response()->json($response);
    }

    public function getAll()
    {
        $response = Embriao::all();
        return response()->json($response);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        Embriao::find($id)->update([
            "data_congelamento" => $request->data_congelamento,
            "data_descongelamento" => $request->data_descongelamento
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Embriao $embriao)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\MaterialDoadora;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Http\Request;

class MaterialDoadoraController extends Controller
{
    //
    public function getAll() {
        $doadoras = MaterialDoadora::all();
        return response()->json($doadoras);
    }

    public function getDoadoraByID($id_doadora) {
        $response = MaterialDoadora::where('id_animal', '=', $id_doadora);
        return response()->json($response);
    }
}
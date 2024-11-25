<?php

namespace App\Http\Controllers;

use App\Models\Proprietario;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProprietarioController extends Controller
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
        Proprietario::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Proprietario $proprietario)
    {
        //
    }

    public function showAll(){
        $response = Proprietario::all();
        return response()->json($response);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proprietario $proprietario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proprietario $proprietario)
    {
        //
    }

    public function login(Request $request) {

        // Busca o proprietário com base no email e senha diretamente
        $proprietario = Proprietario::where('email', $request->email)
            ->where('senha', $request->senha)
            ->first();

        // Verifica se encontrou um proprietário
        if (!$proprietario) {
            return response()->json(['message' => 'Email ou senha inválidos.'], 401);
        }

        // Retorna uma mensagem de sucesso
        return response()->json([
            'message' => 'Autenticação bem-sucedida.',
            'proprietario' => $proprietario,
        ]);
    }
}

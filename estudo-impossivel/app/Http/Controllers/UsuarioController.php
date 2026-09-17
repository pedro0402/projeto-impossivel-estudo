<?php

namespace App\Http\Controllers;

use App\Services\UsuarioService;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{

    protected UsuarioService $usuarioService; 
 

    public function __construct(UsuarioService $usuarioService)
    {
        $this->usuarioService = $usuarioService;
    }

    public function store(Request $request) 
    {
        $dadosValidos = $request->validate([
            'nome' => 'required|string|min:3',
            'email' => 'required|email|unique:usuarios,email',
            'senha' => 'required|string|min:6',
            'endereco' => 'nullable|string',
            'perfil' => 'required',
        ]);

        $usuarioCriado = $this->usuarioService->criarUsuario($dadosValidos);

        return response()->json($usuarioCriado, 201);
    }
}

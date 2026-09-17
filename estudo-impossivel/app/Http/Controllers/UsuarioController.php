<?php

namespace App\Http\Controllers;

use App\DTOs\Usuario\CreateUsuarioDTO;
use App\Enums\PerfilUsuario;
use Illuminate\Validation\Rules\Enum;
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
            'perfil' => ['required', new Enum(PerfilUsuario::class)],
        ]);

        $usuarioDTO = new CreateUsuarioDTO($dadosValidos['nome'], $dadosValidos['email'], $dadosValidos['senha'], $dadosValidos['endereco'], PerfilUsuario::from($dadosValidos['perfil']));

        $usuarioCriado = $this->usuarioService->criarUsuario($usuarioDTO);

        return response()->json($usuarioCriado, 201);
    }
}

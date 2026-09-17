<?php

namespace App\Services;

use App\Repositories\UsuarioRepository;
use Illuminate\Support\Facades\Hash;

class UsuarioService
{
    protected UsuarioRepository $usuarioRepository;

    public function __construct(UsuarioRepository $usuarioRepository)
    {
        $this->usuarioRepository = $usuarioRepository;
    }

    public function criarUsuario(array $dadosUsuario) 
    {
        
        $dadosUsuario['senha'] =  Hash::make($dadosUsuario['senha']);

        return $this->usuarioRepository->criarUsuario($dadosUsuario);

    }
}
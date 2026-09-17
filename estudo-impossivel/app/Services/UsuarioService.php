<?php

namespace App\Services;

use App\DTOs\Usuario\CreateUsuarioDTO;
use App\Repositories\UsuarioRepository;
use Illuminate\Support\Facades\Hash;

class UsuarioService
{
    protected UsuarioRepository $usuarioRepository;

    public function __construct(UsuarioRepository $usuarioRepository)
    {
        $this->usuarioRepository = $usuarioRepository;
    }

    public function criarUsuario(CreateUsuarioDTO $dadosUsuario) 
    {
        
        $dadosParaSalvar = [
            'nome' => $dadosUsuario->getNome(),
            'email' => $dadosUsuario->getEmail(),
            'senha' => Hash::make($dadosUsuario->getSenha()),
            'endereco' => $dadosUsuario->getEndereco(),
            'perfil' => $dadosUsuario->getPerfil(),
        ];

        return $this->usuarioRepository->criarUsuario($dadosParaSalvar);

    }
}
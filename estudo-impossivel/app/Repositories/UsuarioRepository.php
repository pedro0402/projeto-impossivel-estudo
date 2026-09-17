<?php

namespace App\Repositories;

use App\Models\Usuario;

class UsuarioRepository
{
    public function criarUsuario(array $dadosUsuario) 
    {
        return Usuario::create($dadosUsuario);
    }
}
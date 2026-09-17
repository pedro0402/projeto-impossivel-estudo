<?php

namespace App\Repositories;

use App\Models\Usuario;

class UsuarioRepository
{
    public function criarUsuario(array $usuario) 
    {
        return Usuario::create($usuario);
    }
}
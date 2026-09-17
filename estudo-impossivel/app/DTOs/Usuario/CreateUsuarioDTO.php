<?php

namespace App\DTOs\Usuario;

use App\Enums\PerfilUsuario;

class CreateUsuarioDTO 
{
    readonly string $nome;
    readonly string $email;
    readonly string $senha;
    readonly ?string $endereco;
    readonly PerfilUsuario $perfil;

    public function __construct(string $nome, string $email, string $senha, ?string $endereco, PerfilUsuario $perfil)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
        $this->endereco = $endereco;
        $this->perfil = $perfil; 

    }
    
    /**
     * Get the value of nome
     */ 
    public function getNome():string
    {
        return $this->nome;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail():string
    {
        return $this->email;
    }

    /**
     * Get the value of senha
     */ 
    public function getSenha():string
    {
        return $this->senha;
    }

    /**
     * Get the value of endereco
     */ 
    public function getEndereco():?string
    {
        return $this->endereco;
    }

    /**
     * Get the value of perfil
     */ 
    public function getPerfil():PerfilUsuario
    {
        return $this->perfil;
    }
}
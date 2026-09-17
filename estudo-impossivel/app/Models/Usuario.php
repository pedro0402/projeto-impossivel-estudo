<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //quais campos podem ser preenchidos via create()/fill()
    protected $fillable = [
        'nome',
        'email',
        'senha',
        'endereco',
        'perfil'
    ];

    //quais campos não devem aparecer quando o Model é convertido para array/JSON
    protected $hidden = [
        'senha'
    ];
}

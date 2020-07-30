<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    /**
     * Fillable para o caminhamento da controller
     */
    protected $fillable = [
        'nome' , 'endereco' , 'email' , 'telefone' , 'publicado'
    ];

}

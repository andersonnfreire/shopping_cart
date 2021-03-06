<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'nome',
        'descricao',
        'imagem',
        'valor',
        'ativo'
    ];
}

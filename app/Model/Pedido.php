<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
     protected $fillable = [
        'user_id',
        'status'
    ];
}

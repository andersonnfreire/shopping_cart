<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PedidoProduto extends Model
{
     protected $fillable = [
        'pedido_id',
        'produto_id',
        'status',
        'valor'
    ];
    
    public function produto()
    {
        return $this->belongsTo('App\Model\Produto', 'produto_id', 'id');
    }
}

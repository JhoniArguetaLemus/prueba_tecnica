<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable=[
        'nombre_producto',
        'descripcion',
        'precio',
        'cantidad',
    
    ];

    public function movimientos(){
        return $this->hasMany(movimiento_inventario::class, 'producto_id');
    }


   
}

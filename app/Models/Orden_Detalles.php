<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orden_Detalles extends Model
{
    use HasFactory;

    protected $fillable = ['precio', 'cantidad', 'id_orden', 'id_producto'];

    //Relacion uno a muchos (inversa)
    public function orden()
    {
        return $this->belongsTo('App\Models\Orden');
    }

    //Relacion uno a muchos
    public function producto()
    {
        return $this->hasMany('App\Models\Producto');
    }
}

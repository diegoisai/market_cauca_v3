<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Factura extends Model
{
    use HasFactory;
    protected $fillable = ['fecha', 'valor', 'total', 'id_producto', 'id_user'];

    //Relacion uno a muchos (inversa)
    public function producto()
    {
        return $this->belongsTo('App\Models\Producto');
    }

    public function user()
    {
        return $this->BelongsTo('App\Models\User');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    use HasFactory;

    //Relacion Uno a muchos
    public function user ()
    {
        return $this->hasMany('App\Models\User');
    }

    public function orden_details()
    {
        return $this->hasMany('App\Models\Orden_Detalles');
    }
}

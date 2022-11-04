<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
   use HasFactory;

   protected $fillable = ['name', 'detalles', 'precio', 'costo_compra', 'descripcion'];
      
   public $timestamps=false;

   //Relacion uno a muchos
   public function factura()
   {
      return $this->hasMany('App\Models\Factura');
   }

   //Relacion uno a muchos (inversa)
   public function orden_detalles()
   {
      return $this->belongsTo('App\Models\Orden_Detalles');
   }
}

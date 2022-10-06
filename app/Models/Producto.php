<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends BaseModel
{
  protected function fields ()
  {
    return [

        TextField::make('name')->label('Nombre')->rules('required'),
        TextField::make('detalles')->label('Detalles')->rules('required'),
        TextField::make('precio')->label('Precio')->rules('required'),
        TextField::make('costo_compra')->label('Costo_compra')->rules('required'),
        TextField::make('descripcion')->label('Descripcion')->rules('required'),
    ];
  }

  public function getTranslations() : array
  {
    return [
        'singular' => 'Producto',
        'plural' => 'Productos',
    ];
  }
}

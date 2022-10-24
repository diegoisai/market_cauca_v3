<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $productos = Producto::all();

        return $productos;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto = new Producto();

        $producto->name=$request->name;
        $producto->detalles=$request->detalles;
        $producto->precio=$request->precio;
        $producto->costo_compra=$request->costo_compra;
        $producto->descripcion=$request->descripcion;

        $producto->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // $producto = Producto::findOrFail($request->id);
         $producto = Producto::find($request->id);

        $producto->name=$request->name;
        $producto->detalles=$request->detalles;
        $producto->precio=$request->precio;
        $producto->costo_compra=$request->costo_compra;
        $producto->descripcion=$request->descripcion;

        $producto->save();

        //return $producto;
        return ["Resultado" => "Actualizado"];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $producto = Producto::destroy($request->id);
        return $producto;
    }
}

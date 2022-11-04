<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Orden_Detalles;
use Illuminate\Http\Request;

class OrdenDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $details = Orden_Detalles::all();
        return $details;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $detail = new Orden_Detalles();

        $detail->precio = $request->precio;
        $detail->cantidad = $request->cantidad;
        $detail->id_orden = $request->id_orden;
        $detail->id_producto = $request->id_producto;

        $detail->save();

        return ['Resultado' => 'Agregado'];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $detail = Orden_Detalles::find($request->id);

        $detail->precio = $request->precio;
        $detail->cantidad = $request->cantidad;
        $detail->id_orden = $request->id_orden;
        $detail->id_producto = $request->id_producto;

        $detail->save();

        return ['Resultado' => 'Actualizado'];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $detail = Orden_Detalles::destroy($request->id);

        return ['Resultado' => 'Eliminado Satisfactoriamente'];
    }
}

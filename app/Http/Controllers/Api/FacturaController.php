<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Factura;
use Illuminate\Http\Request;

class FacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facturas = Factura::all();

        return $facturas;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $factura = new Factura();

        $factura->fecha = $request->fecha;
        $factura->valor = $request->valor;
        $factura->total = $request->total;
        $factura->id_producto = $request->id_producto;
        $factura->id_user = $request->id_user;

        $factura->save();

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
        $factura = Factura::find($request->id);

        $factura->fecha = $request->fecha;
        $factura->valor = $request->valor;
        $factura->total = $request->total;
        $factura->id_producto = $request->id_producto;
        $factura->id_user = $request->id_user;

        $factura->save();

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
        $factura = Factura::destroy($request->id);

        return ["Resultado" => "Eliminado Exitosamente"];
    }
}

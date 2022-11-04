<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Orden;
use Illuminate\Http\Request;

class OrdenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ordenes = Orden::all();

        return $ordenes;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $orden = new Orden();

        $orden->cantidad = $request->cantidad;
        $orden->direccion_envio = $request->direccion_envio;
        $orden->direccion_pedido = $request->direccion_pedido;
        $orden->direccion_correo = $request->direccion_correo;
        $orden->fecha = $request->fecha;
        $orden->estado = $request->estado;
        $orden->id_user = $request->id_user;

        $orden->save();

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
        $orden = Orden::find($request->id);

        $orden->cantidad = $request->cantidad;
        $orden->direccion_envio = $request->direccion_envio;
        $orden->direccion_pedido = $request->direccion_pedido;
        $orden->direccion_correo = $request->direccion_correo;
        $orden->fecha = $request->fecha;
        $orden->estado = $request->estado;
        $orden->id_user = $request->id_user;

        $orden->save();

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
        $orden = Orden::destroy($request->id);

        return ['Resultado' => 'Eliminado'];
    }
}

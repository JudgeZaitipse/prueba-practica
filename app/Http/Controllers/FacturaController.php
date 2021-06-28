<?php

namespace App\Http\Controllers;

use App\factura as Factura;
use Illuminate\Http\Request;
use App\cliente as Cliente;
use App\vehiculo as Vehiculo;
class FacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $v = \Validator::make($request->all(), [
            'cedula'    => 'required',
            'nombre'    => 'required',
            'apellido'  => 'required',
            'correo'    => 'required',
            'telefono'  => 'required',
            'direcion'  => 'required',
            'celular'   => 'required',
            'modelo'    => 'required',
            'placa'     => 'required',
            'color'     => 'required',
            'marca'     => 'required',
            'valor'     => 'required',
        ]);

        if ($v->fails())
        {
            return response()->json(redirect()->back()->withInput()->withErrors($v->errors())); 
        }
        else{

            $cliente = new Cliente;
            $cliente->cedula = $request->cedula;
            $cliente->nombre = $request->nombre;
            $cliente->apellido = $request->apellido;
            $cliente->direcion = $request->direcion;
            $cliente->telefono = $request->telefono;
            $cliente->celular = $request->celular;
            $cliente->correo = $request->correo;
            $cliente->save();

            $vehiculo = new Vehiculo;
            $vehiculo->modelo  = $request->modelo;
            $vehiculo->placa   = $request->placa;
            $vehiculo->color   = $request->color; 
            $vehiculo->marca   = $request->marca;
            $vehiculo->valor   = $request->valor;
            $vehiculo->save();

            $clientes = Cliente::all();
            $Vehiculo = Vehiculo::all();

            $ultimo_cliente  =  $clientes->last();
            $ultimo_vehiculo =  $Vehiculo->last();

            $factura = new  Factura;
            $factura->cliente_id = $ultimo_cliente->id; 
            $factura->vehiculo_id = $ultimo_vehiculo->id; 
            $factura->estado_id = 1;
            $factura->id_usuario = 1;
            $factura->save();        
            return response()->json('true');
        }  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function show(factura $factura)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function edit(factura $factura)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        if (isset($request->id_cliente) && isset($request->vehiculo_id) ) {
            $cliente = Cliente::find($request->id_cliente);
            $vehiculo = Vehiculo::find($request->vehiculo_id);

            if (!empty($cliente) && !empty($vehiculo) ) {

                $cliente->cedula = $request->cedula;
                $cliente->nombre = $request->nombre;
                $cliente->apellido = $request->apellido;
                $cliente->direcion = $request->direcion;
                $cliente->telefono = $request->telefono;
                $cliente->celular = $request->celular;
                $cliente->correo = $request->correo;
                $cliente->update();

                $vehiculo->modelo  = $request->modelo;
                $vehiculo->placa   = $request->placa;
                $vehiculo->color   = $request->color; 
                $vehiculo->marca   = $request->marca;
                $vehiculo->valor   = $request->valor;
                $vehiculo->update();

                return response()->json('true');

            }else{
                return response()->json('false');
            }
        }else {
            return response()->json('false');
        }

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if (isset($request->factura_id)) {
            $factura = Factura::find($request->factura_id);
            if (!empty($factura)) {
                $factura->estado_id = 2;
                $factura->update();

                return response()->json('true');
            }else{
                return response()->json('false');
            }
        }else{
            return response()->json('false');
        }
    }
}

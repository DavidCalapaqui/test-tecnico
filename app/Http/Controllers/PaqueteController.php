<?php

namespace App\Http\Controllers;

use App\Models\Paquete;
use Illuminate\Http\Request;


class PaqueteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paquetes = Paquete::all();

        if(count($paquetes)>0){
            return response()->json(["paquetes" => $paquetes], 200);
        }else{
            return response()->json(["msg" => "No hay paquetes" , 404]);
        }
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
        $paquete = new Paquete();
        $paquete->id_cliente = $request->id_cliente;
        $paquete->origen = $request->origen;
        $paquete->destino = $request->destino;
        $paquete->peso = $request->peso;
        $paquete->valor = $request->valor;
        $paquete->bultos = $request->bultos;


        $paquete->save();

        return response()->json(["ok"=>true, "msg"=>"Paquete agregado exitosamente"], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $req)
    {
        $paquete = Paquete::where('id', $req->id)->get();
        // echo($cliente);
        if( !empty($paquete) ){
            return response()->json(["ok"=>true, "paquete"  => $paquete], 200);
        }else{
            return response()->json(["ok"=>false ,"msg"=>"No existe paquetes con ese id"], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function paquetesPorCliente ( $idCliente ){

        echo( $idCliente);
 
        $paquetes = Paquete::where('id_cliente',$idCliente )->get();

        if(count($paquetes) > 0 ){
            return response()->json(["ok"=>true, "paquetes" => $paquetes], 200);
        }else{
            return response()->json(["ok"=>false, "msg"=>"No hay paquetes para el cliente" ], 404);
        }


    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Cerveza;

class Oferta_cervezaController extends Controller
{   
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$id_tipo_cerveza,$id_oferta,$correo)
    {
        $cervezas = DB::select(DB::raw("SELECT numero_cerveza, nombre,descripcion,costo,precio_venta,fk_tipo_cerveza,fk_oferta
        FROM cerveza WHERE fk_oferta = '$id_oferta' and fk_tipo_cerveza='$id_tipo_cerveza'"));

        return view ('home.cervezaOferta')->with('cervezas',$cervezas)->with('id_oferta',$id_oferta)->with('id_tipo_cerveza',$id_tipo_cerveza)->with('correo',$correo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,$id_tipo_cerveza,$id_oferta,$correo)
    {
        $cervezas = DB::select(DB::raw("SELECT numero_cerveza, nombre,descripcion,costo,precio_venta,fk_tipo_cerveza,fk_oferta
        FROM cerveza WHERE fk_oferta = '$id_oferta' and fk_tipo_cerveza='$id_tipo_cerveza'"));

        return view ('home.crearOfertaCerveza')->with('cervezas',$cervezas)->with('id_oferta',$id_oferta)->with('id_tipo_cerveza',$id_tipo_cerveza)->with('correo',$correo);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id_oferta,$id_tipo_cerveza)
    {
        $cerveza = new Cerveza();
        $cerveza->nombre=$request->nombre;
        $cerveza->descripcion=$request->descripcion;
        $cerveza->costo=$request->costo;
        $cerveza->precio_venta=$request->precio_venta;
        $cerveza->fk_tipo_cerveza=$id_oferta; //estan invertidos los ids pero funcionan bien 
        $cerveza->fk_oferta=$id_tipo_cerveza;
        $cerveza->save();
        return back();
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
}

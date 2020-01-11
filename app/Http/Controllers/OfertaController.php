<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Oferta;

class OfertaController extends Controller
{   
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$id_tipo_cerveza,$correo)
    {
        $ofertas = DB::select(DB::raw("SELECT id_oferta, descuento,fecha_inicio,fecha_fin
        FROM oferta "));

        return view ('home.oferta')->with('ofertas',$ofertas)->with('id_tipo_cerveza',$id_tipo_cerveza)->with('correo',$correo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,$id_tipo_cerveza,$correo)
    {
        $ofertas = DB::select(DB::raw("SELECT id_oferta, descuento,fecha_inicio,fecha_fin
        FROM oferta "));

        return view ('home.crearOferta')->with('ofertas',$ofertas)->with('id_tipo_cerveza',$id_tipo_cerveza)->with('correo',$correo);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $oferta=new Oferta();
        $oferta->descuento=$request->descuento;
        $oferta->fecha_inicio=$request->fecha_inicio;
        $oferta->fecha_fin=$request->fecha_fin;
        $oferta->save();

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

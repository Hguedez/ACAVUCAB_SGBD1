<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Miembro_evento;
use App\Evento;

class Miembro_eventoController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $id_evento,$id_miembro,$correo)
    {
       $miembro_evento = DB::select(DB::raw("SELECT id_miembro_evento, fk_evento,fk_miembro,cantidad, (
             SELECT razon_social FROM miembro WHERE id_miembro = fk_miembro ),(SELECT nombre_evento FROM evento WHERE id_evento = fk_evento ),(SELECT fecha FROM evento WHERE id_evento = fk_evento )
             FROM miembro_evento WHERE fk_evento = '$id_evento' and fk_miembro='$id_miembro' "));
        return view ('home.miembro_evento')->with('miembro_evento',$miembro_evento)->with('correo',$correo);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id_evento,$id_miembro,$correo)
    {
        $miembro_evento = DB::select(DB::raw("SELECT id_miembro_evento, fk_evento,fk_miembro,cantidad, (
            SELECT razon_social FROM miembro where id_miembro='$id_miembro'),(SELECT nombre_evento FROM evento where id_evento='$id_evento'),(SELECT fecha FROM evento where id_evento='$id_evento')
            FROM miembro_evento WHERE fk_evento = '$id_evento' and fk_miembro='$id_miembro' "));

        return view('home.crearMiembro_evento')->with('miembro_evento',$miembro_evento)->with('id_evento', $id_evento)->with('id_miembro',$id_miembro)->with('correo',$correo);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id_evento,$id_miembro)
    {

        $miembro_evento=new Miembro_evento();
        $miembro_evento->cantidad=$request->cantidad;
        $miembro_evento->fk_evento=$id_evento;
        $miembro_evento->fk_miembro=$id_miembro;
        $miembro_evento->save();

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
    public function destroy($idmiembro_evento)
    {
        $miembro_evento=Miembro_evento::find($idmiembro_evento);
        $miembro_evento->delete();
        return back();
    }
}

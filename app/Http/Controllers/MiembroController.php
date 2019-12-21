<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Miembro;
use App\Telefono;
use App\Correo;
use SebastianBergmann\Environment\Console;

class MiembroController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $id_evento,$id_miembro){
        $miembros = DB::select(DB::raw(
            "SELECT id_miembro, razon_social, denominacion_comercial, web,
                    rif
            FROM miembro
           " ));

        return view ('home.miembro')->with('miembros', $miembros)->with('id_evento', $id_evento)->with('id_miembro', $id_miembro);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.crearMiembro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $miembro = new Miembro();
        $miembro->razon_social=$request->razon_social;
        $miembro->denominacion_comercial=$request->denominacion_comercial;
        $miembro->web=$request->web;
        $miembro->rif=$request->rif;
        $miembro->save();

        /*$contact=new Telefono();
        $contact->codigo_area=$request->codigo_area;
        $contact->numero=$request->numero;

        $auxarray = DB::select(DB::raw("SELECT MAX(id_miembro)
                            FROM miembro
                            "));

        $array = json_decode(json_encode($auxarray),true);*/

        /*echo '<script>console.log("hello, world");</script>';

        $result = array_map(function ($value) {
            return (array)$value;
        }, $array);*/

       /* $aux=intval($array[0])  ;
        $contact->fk_miembro = $aux;
        $contact->save();*/
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
    public function destroy($idmiembro)
    {
        $miembro=Miembro::find($idmiembro);
        $miembro->delete();
        return back()->with('Evento eliminado');
    }
}

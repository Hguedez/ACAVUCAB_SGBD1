<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Tipo_cerveza;
class Tipo_cervezaController extends Controller
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
    public function index()
    {
        $tipo_cerveza = DB::select( DB::raw("SELECT id_tipo_cerveza,nombre, descripcion,historia,fk_tipo_cerveza
                                            FROM tipo_cerveza
                                            WHERE nombre is not null"
                                        ));
        return view('home.tipo_cerveza',compact('tipo_cerveza'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.crearTipo_cerveza');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
        $tipo_cerveza = new Tipo_cerveza();
        $tipo_cerveza->nombre=$request->nombre;
        $tipo_cerveza->descripcion=$request->descripcion;
        $tipo_cerveza->historia=$request->historia;
        $tipo_cerveza->save();
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
        $tipo_cerveza=Tipo_cerveza::find($id);
        $tipo_cerveza->delete();
        return back()->with('Evento eliminado');
    }
}

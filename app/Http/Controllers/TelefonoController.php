<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Telefono;
class TelefonoController extends Controller
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
    /*public function index(Request $request, $id)
    {
        $telefonos = DB::select(DB::raw("SELECT codigo_telefono, codigo_area,
                                         numero, fk_cliente_natural, fk_cliente_juridico,
                                         fk_empleado,fk_persona_de_contacto,fk_tienda_fisica,
                                         fk_tienda_web,fk_miembro,(
                                        SELECT razon_social FROM miembro WHERE id_miembro = fk_miembro
                                        ) FROM telefono WHERE fk_miembro = '$id'"));
        return view ('home.telefono', compact('telefonos'));
    }*/
    public function index(Request $request,$id_miembro)
    {
        $telefonos = DB::select(DB::raw("SELECT codigo_telefono, codigo_area,
                                         numero, fk_cliente_natural, fk_cliente_juridico,
                                         fk_empleado,fk_tienda_fisica,
                                         fk_tienda_web,fk_miembro
                                         FROM telefono Where fk_miembro = $id_miembro"));
        return view ('home.telefono')->with('telefonos',$telefonos)->with('id_miembro',$id_miembro);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,$id_miembro)
    {
        $telefonos = DB::select(DB::raw("SELECT codigo_telefono, codigo_area,
        numero, fk_cliente_natural, fk_cliente_juridico,
        fk_empleado,fk_tienda_fisica,
        fk_tienda_web,fk_miembro
        FROM telefono Where fk_miembro = $id_miembro"));
        return view ('home.crearTelefono')->with('telefonos',$telefonos)->with('id_miembro',$id_miembro);
        //return view('home.telefono');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $telefono=new Telefono();
        $telefono->codigo_area=$request->codigo_area;
        $telefono->numero=$request->numero;
        $telefono->fk_miembro=$id;
        $telefono->save();
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
    public function destroy($idtelefono)
    {
        $telefono=Telefono::find($idtelefono);
        $telefono->delete();
        return back();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Persona_de_contacto;
use App\Telefono;
class Persona_de_contactoController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $id_miembro,$correo){
        $contactos = DB::select(DB::raw("SELECT id_persona, cedula, nombre, apellido, fk_miembro,(
            SELECT razon_social FROM miembro WHERE id_miembro = fk_miembro)
            FROM persona_de_contacto WHERE fk_miembro = '$id_miembro'"));

        return view ('home.persona_de_contacto')->with('contactos',$contactos)->with('id_miembro',$id_miembro)->with('correo',$correo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id_miembro,$correo)
    {
        $contactos = DB::select(DB::raw("SELECT id_persona, cedula, nombre, apellido, fk_miembro,(
            SELECT razon_social FROM miembro WHERE id_miembro = fk_miembro)
            FROM persona_de_contacto WHERE fk_miembro = '$id_miembro'"));

        return view ('home.crearPersona_de_contacto')->with('contactos',$contactos)->with('id_miembro',$id_miembro)->with('correo',$correo);
        //return view('home.crearPersona_de_contacto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $contacto=new Persona_de_contacto();
        $contacto->cedula=$request->cedula;
        $contacto->nombre=$request->nombre;
        $contacto->apellido=$request->apellido;
        $contacto->nombre=$request->nombre;
        $contacto->fk_miembro=$id;
        $contacto->save();


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
    public function destroy($idcontacto)
    {
        $contacto=Persona_de_contacto::find($idcontacto);
        $contacto->delete();
        return back();
    }
}

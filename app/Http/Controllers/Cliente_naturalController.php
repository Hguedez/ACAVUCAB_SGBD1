<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Cliente_natural;
use Log;
//Esto es para lugar
use App\Lugar;
use Illuminate\Support\Facades\Hash;


class Cliente_naturalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.crearCliente_natural');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Log::info(1);
        $cliente_natural = DB::select( DB::raw("SELECT id_cliente_natural,rif, numero_carnet,cedula,primer_nombre,
                                                segundo_nombre,primer_apellido,segundo_apellido,fk_lugar/*password,email*/
                                            FROM cliente_natural"
                                        ));
        return view('auth.register',compact('cliente_natural'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //Lugar
    public function getMunicipio(Request $request){
        if ($request->ajax()){
             $municipios = Lugar::where('fk_lugar',$request->id_lugar)->get();
             foreach($municipios as $municipio){
                 $municipiosArray[$municipio->id_lugar] = $municipio->nombre;
             }
            
             return response()->json($municipiosArray);
         }
     }
 
     public function getParroquia(Request $request){
         if ($request->ajax()){
              $parroquias = Lugar::where('fk_lugar',$request->id_lugar)->get();
              foreach($parroquias as $parroquia){
                  $parroquiasArray[$parroquia->id_lugar] = $parroquia->nombre;
              }
              return response()->json($parroquiasArray);
          }
      }

    
    public function store(Request $request)
    {
        $cliente_natural=new Cliente_natural();
        $cliente_natural->primer_nombre=$request->primer_nombre;
        $cliente_natural->segundo_nombre=$request->segundo_nombre;
        $cliente_natural->primer_apellido=$request->primer_apellido;
        $cliente_natural->segundo_apellido=$request->segundo_apellido;
        $cliente_natural->cedula=$request->cedula;
        $cliente_natural->rif=$request->rif;
        $cliente_natural->numero_carnet=$request->numero_carnet;
        $this->validate(request(), [
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
        ]);
        //$cliente_natural->email=$request->email;
        //$cliente_natural->password=$request->password;
        //$cliente_natural->fk_lugar=getMunicipio();
           

        $cliente_natural->save();
        return view('home.home2');
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

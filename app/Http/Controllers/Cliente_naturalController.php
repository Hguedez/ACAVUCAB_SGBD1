<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Cliente_natural;
use Log;
//Esto es para lugar
use App\Lugar;
use App\Usuario;
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
         return view('home.home2');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cliente_natural = DB::select( DB::raw("SELECT id_cliente_natural,rif, numero_carnet,cedula,primer_nombre,
                                                segundo_nombre,primer_apellido,segundo_apellido,fk_lugar,password,
                                                email,fk_rol,id_usuario,fk_cliente_natural
                                            FROM cliente_natural,usuario"
                                        ));
        return view('auth.register')->with('cliente_natural',$cliente_natural);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


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
        $cliente_natural->save();
    
        $usuario=new Usuario();
        $this->validate(request(), [
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
        ]);
        $usuario->email=$request->email;
        $usuario->password=$request->password;
        $usuario->fk_rol=3;
        //$usuario->fk_cliente_natural=$cliente_natural->id_cliente_natural;
        $checkT = DB::select(DB::raw("SELECT id_cliente_natural as id from cliente_natural WHERE rif = '$cliente_natural->rif' AND numero_carnet = '$cliente_natural->numero_carnet'"));
        $id = $checkT[0]->id;
        $usuario->fk_cliente_natural = $id;
        //$cliente_natural->fk_lugar=getMunicipio();
    
        $usuario->save();
        
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
   
}

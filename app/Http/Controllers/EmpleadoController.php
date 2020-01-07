<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Empleado;
use Log;
//Esto es para lugar
use App\Lugar;
use App\Usuario;
use Illuminate\Support\Facades\Hash;


class EmpleadoController extends Controller
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
        $cargo = DB::select( DB::raw("SELECT nombre_cargo,id_cargo
                                        FROM cargo"
                                        ));
        $empleado = DB::select( DB::raw("SELECT nombre,apellido,cedula,fk_cargo,fk_lugar,fk_tienda_fisica,
                                        password,email,fk_rol,id_usuario,fk_cliente_natural
                                        FROM empleado,usuario"
                                        ));                  
        $tienda = DB::select( DB::raw("SELECT id_tienda_fisica,nombre
                                        FROM tienda_fisica"
                                        ));        
        return view('home.crearEmpleado')->with('cargo',$cargo)->with('empleado',$empleado)->with('tienda',$tienda);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empleado = new Empleado();
        $empleado->nombre=$request->nombre;
        $empleado->apellido=$request->apellido;
        $empleado->cedula=$request->cedula;
        $empleado->fk_cargo=$request->fk_cargo;
        $empleado->fk_tienda_fisica=$request->fk_tienda_fisica;
        $empleado->save();

        $usuario=new Usuario();
        $this->validate(request(), [
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
        ]);
        $usuario->email=$request->email;
        $usuario->password=$request->password;
        $usuario->fk_rol=$request->fk_rol;
        $checkT = DB::select(DB::raw("SELECT id_empleado as id from empleado WHERE cedula = '$empleado->cedula'"));
        $id = $checkT[0]->id;
        $usuario->fk_empleado = $id;

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

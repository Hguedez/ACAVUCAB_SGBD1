<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Cliente_juridico;
use Log;
//Esto es para lugar
use App\Lugar;
use App\Usuario;
use Illuminate\Support\Facades\Hash;
class Cliente_juridicoController extends Controller
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
        $cliente_juridico = DB::select( DB::raw("SELECT id_cliente_juridico,rif, numero_carnet,denominacion_comercial,
                                                razon_social,web,capital,direccion_fiscal,fk_lugar_natural,fk_lugar_fiscal,
                                                password,email,fk_rol,id_usuario,fk_cliente_natural
                                            FROM cliente_natural,usuario"
                                        ));
        return view('auth.register')->with('cliente_juridico',$cliente_juridico);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $var = $_POST['parroquia'];
        $checkL = DB::select(DB::raw("SELECT id_lugar as id from lugar WHERE nombre = '$var' and id_lugar > 359"));
        $lugar = $checkL[0]->id;
        $cliente_juridico=new Cliente_juridico();
        $cliente_juridico->rif=$request->rif;
        $cliente_juridico->numero_carnet=$request->numero_carnet;
        $cliente_juridico->denominacion_comercial=$request->denominacion_comercial;
        $cliente_juridico->razon_social=$request->razon_social;
        $cliente_juridico->web=$request->web;
        $cliente_juridico->capital=$request->capital;
        $cliente_juridico->direccion_fiscal=$request->direccion_fiscal;
        $cliente_juridico->fk_lugar_natural=$lugar;
        $cliente_juridico->save();
    
        $usuario=new Usuario();
        $this->validate(request(), [
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
        ]);
        $usuario->email=$request->email;
        $usuario->password=$request->password;
        $usuario->fk_rol=3;
        //$usuario->fk_cliente_natural=$cliente_natural->id_cliente_natural;
        $checkT = DB::select(DB::raw("SELECT id_cliente_juridico as id from cliente_juridico WHERE rif = '$cliente_juridico->rif' AND numero_carnet = '$cliente_juridico->numero_carnet'"));
        $id = $checkT[0]->id;
        $usuario->fk_cliente_juridico = $id;
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
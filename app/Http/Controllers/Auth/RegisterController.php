<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use App\Lugar;
use Log;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'name2' => $data['name2'],
            'apellido' => $data['apellido'],
            'apellido2' => $data['apellido2'],
            'cedula' => $data['cedula'],
            'rif' => $data['rif'],
            
        ]);
    }

    public function getMunicipio(Request $request){
       if ($request->ajax()){
           //echo "hola";
            $municipios = Lugar::where('fk_lugar',$request->id_lugar)->get();
            foreach($municipios as $municipio){
                $municipiosArray[$municipio->id_lugar] = $municipio->nombre;
                Log::info($municipiosArray[$municipio->id_lugar]);
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
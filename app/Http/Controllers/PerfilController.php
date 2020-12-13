<?php

namespace App\Http\Controllers;

use App\Models\Propiedad;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\Environment\Console;

class PerfilController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function mostrarPerfil(){

        $datos_Personales = Auth::user();
        
        $user = Auth::user();
        $idUser = $user->id;
        
        $propiedades = Propiedad::whereIn('user_id', [$idUser])->orderBy('categoria_id', 'asc')->get();

        return view('mi_Perfil')->with('datosPersonales', $datos_Personales)->with('propiedades', $propiedades);
    }
    
    public function mostrarPropiedadUsuario(){

        
        


        

        //$user =  User::findOrFail();
        
        //return $user->propiedad;
    }



    //RELACION CON PROPIEDAD

    public function propiedades()
    {
        return $this->hasMany(Propiedad::class);
    }
}

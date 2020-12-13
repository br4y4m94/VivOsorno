<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categoria;
use App\Models\Tipo;


class WelcomeController extends Controller
{
    public function inicio(){
        $tipo = Tipo::all();
        $categorias = Categoria::all();   
        return view('welcome')->with('categorias',$categorias)->with('tipo',$tipo); 
        
        //->with('categorias',$categorias)->with('tipo',$tipo)
    }
}

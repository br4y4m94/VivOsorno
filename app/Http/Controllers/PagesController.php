<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categoria;
use App\Models\Tipo;
use App\Models\Propiedad;

class PagesController extends Controller
{

    
    public function mostrarPropiedad()
    {
        //$propiedadMostrada = Propiedad::findOrFail($id);
        return view('propiedad.vistaPropiedad');//->with('propiedadMostrada',$propiedadMostrada);
    }

    public function formActualizarUser(){
        return view('form_ActualizarUser');
    }
    
}

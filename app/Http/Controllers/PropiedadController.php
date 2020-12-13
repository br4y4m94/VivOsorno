<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Propiedad;
use App\Models\Categoria;
use App\Models\Tipo;
use App\Models\Direccion;


use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Echo_;

class PropiedadController extends Controller
{
    // PROTECCION DE LA VISTA
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        $tipos = Tipo::all();
        return view('formPropiedad')->with('categorias',$categorias)->with('tipos',$tipos);
        //->with('categorias',$categorias)->with('tipos',$tipos)
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        //return 'Store';

       
       
        $user = Auth::user();
        $idUser = $user->id;

        //$direccion = new Direccion;
        //$direccion->direccionSector = $request->input('direccionSector');
        //$direccion->direccionCalle = $request->input('direccionCalle');
        //$direccion->direccionNum = $request->input('direccionNum');
        //$direccion->save();
    
        $propiedad = new Propiedad;
        $propiedad->propiedadNombre = $request->input('propiedadNombre');
        $propiedad->propiedadNumRol = $request->input('propiedadNumRol');
        $propiedad->propiedadPrecio = $request->input('propiedadPrecio');
        $propiedad->propiedadDesc = $request->input('propiedadDesc');
        $propiedad->propiedadDireccion = $request->input('propiedadDireccion');
        $propiedad->user_id = $idUser;
        $propiedad->categoria_id = $request-> input('selecCategoria');
        $propiedad->tipo_id = $request->input('selecTipo');
        //$propiedad->direccion_id = $direccion->id;
        $propiedad->save();

        

        return redirect('mi_Perfil');
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

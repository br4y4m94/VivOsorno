<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propiedad extends Model
{
    use HasFactory;

    protected $fillable = [
        'propiedadNombre',
        'propiedadNumRol',
        'propiedadPrecio',
        'propiedadDesc',
        'propiedadDireccion',
        'user_id',
        'categoria_id',
        'tipo_id',
        'direccion_id',
    ];
    
    //----------------------RELACIONES--------------------

    // RELACION DE PROPIEDAD A USUARIO ()
    public function user(){
        return $this->belongsTo(User::class);
    }

    //RELACION DE PROPIEDAD A CATEGORIA
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    // RELACION DE PROPIEDAD A TIPO
    public function tipo()
    {
        return $this->belongsTo(Tipo::class);
    }
    /*
    public function direccion()
    {
        return $this->belongsTo(Direccion::class);
    }
    
    */
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $fillable = [
        'categoriaNombre',
    ];

    //RELACION DE CATEGORIA A PROPIEDAD
    public function propiedades()
    {
        return $this->hasMany(Propiedad::class);
    }
}

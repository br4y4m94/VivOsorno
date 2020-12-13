<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipoPropiedad',
    ];

    //RELACION DE TIPO A PROPIEDAD

    public function propiedades()
    {
        return $this->hasMany(Propiedad::class);
    }
}

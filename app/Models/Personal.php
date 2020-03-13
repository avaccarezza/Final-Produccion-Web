<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    protected $table = "personales";

    protected $fillable = [ "nombre", "descripcion","sueldo",'anio_ingreso', "imagen"];

    public function getNombreAttribute()
    {
        return ucfirst($this->attributes["nombre"]);
    }

}
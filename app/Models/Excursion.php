<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Excursion extends Model
{
    protected $table = "excursiones";

    protected $fillable = [ "nombre", "descripcion","precio", "imagen"];

    public function getNombreAttribute(){
        return ucfirst($this->attributes["nombre"]);
    }
    public function getDescripcionAttribute(){
        return nl2br($this->attributes["descripcion"]);
    }
    
}

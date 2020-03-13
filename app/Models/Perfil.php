<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $table = "perfiles";


    public function User(){

        return $this->hasMany(User::class,"id_perfil");
    }
}

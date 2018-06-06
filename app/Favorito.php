<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorito extends Model
{
    // lo hago porque me parece lo mismo que con Natural Join
    // prefiero especificar
    // protected $tabla="favoritos";
    // protected $primaryKey="id";
}

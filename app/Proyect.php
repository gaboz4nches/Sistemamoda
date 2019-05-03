<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyect extends Model
{
    protected $table = "projects";

    protected $fillable  = ["imagen", "titulo", "contenido"];
}

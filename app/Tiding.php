<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tiding extends Model
{
    protected $table = "tidings";

    protected $fillable  = ["imagen", "titulo", "contenido"];
}

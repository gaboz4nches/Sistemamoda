<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AffiliatedCompani extends Model
{
    protected $table = "affiliated_companies";

    protected $fillable  = ["logo", "contacto", "direccion", "web"];
}

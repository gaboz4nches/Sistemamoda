<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageGallery extends Model
{
	protected $table = "images";

    protected $fillable  = ["imagen", "titulo", "contenido"];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    public $table = "contacto";
    public $primaryKey = "id";
    public $timestamps = false;
    public $guarded = [];    
}
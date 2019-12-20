<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    public $table = "carrito";
    public $primaryKey = "id";
    public $timestamps = false;
    public $guarded = [];   
}

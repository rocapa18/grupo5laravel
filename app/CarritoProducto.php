<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarritoProducto extends Model
{
    public $table = "carritoproducto";
    public $primaryKey = "id";
    public $timestamps = false;
    public $guarded = [];   

    public function producto(){
    	return $this->belongsTo("App\Producto","idproducto");
    } 
}
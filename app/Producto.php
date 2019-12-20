<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Producto;
class Producto extends Model
{
    public $table = "producto";
    public $primaryKey = "id";
    public $timestamps = false;
    public $guarded = [];    
}
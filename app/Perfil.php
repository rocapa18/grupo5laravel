<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    public $table = "users";
    public $primaryKey = "id";
    public $timestamps = false;
    public $guarded = [];    
}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    public $table = "faqs";
    public $primaryKey = "id";
    public $timestamps = false;
    public $guarded = [];    
}
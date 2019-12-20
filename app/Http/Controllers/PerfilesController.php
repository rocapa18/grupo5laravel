<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Perfil;

class PerfilesController extends Controller
{
    public function listado(){
        $perfiles = Perfil::where("id","=", 1)->get();
        $vac = compact("perfiles");
        return view('/listadoPerfiles',$vac);
    }
}
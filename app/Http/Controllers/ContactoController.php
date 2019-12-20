<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contacto;

class ContactoController extends Controller
{
    public function listado(){
        $contactos = Contacto::all();
        $vac = compact("contactos");
        return view('/listadoContactos',$vac);
    }

    public function agregar(Request $req){
        $reglas = [
            "email" => "email|min:1|max:45",
            "comentario" => "string|min:1|max:45"
        ];
        $mensajes = [
            "email" => "El campo :attribute debe ser email",
            "string" => "El campo :attribute debe ser texto",
            "min" => "El campo :attribute tiene un minimo de :min",
            "max" => "El campo :attribute tiene un minimo de :max",
        ];
        $this-> validate($req, $reglas, $mensajes);

    	$contactoNuevo = new Contacto();
    	$contactoNuevo->email=$req["email"];
    	$contactoNuevo->comentario=$req["comentario"];
    	$contactoNuevo->save();
        return redirect("/home");
    }
}

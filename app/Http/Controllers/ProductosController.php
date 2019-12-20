<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductosController extends Controller
{
    public function listado(){
    	$productos = Producto::all();
    	$vac=compact("productos");
        return view("/productos",$vac);
    }

    public function detalle($id){
    	$producto = Producto::find($id);
    	$vac = compact("producto");
        return view("/detalle",$vac);
    }

    public function eliminar($id){
        $producto = Producto::find($id);
        $producto -> delete();
        return redirect("/productos");
    }

    public function agregar(Request $req){

        $reglas = [
            "nombre" => "string|min:1|max:45",
            "descripcion" => "string|min:1|max:45",
            "detalle" => "string|min:0|max:45",
            "precio" => "numeric|min:0",
            "imagen" => "file",
        ];
        $mensajes = [
            "string" => "El campo :attribute debe ser texto",
            "min" => "El campo :attribute tiene un minimo de :min",
            "max" => "El campo :attribute tiene un minimo de :max",
            "numeric" => "El campo :attribute debe ser un numero",
            "file" => "El campo :attribute debe ser una imagen",
        ];
        $this-> validate($req, $reglas, $mensajes);

        $productoNuevo = new Producto();

        $ruta = $req->file("imagen")->store("public");
        $nombreArchivo = basename($ruta);

        $productoNuevo -> nombre = $req["nombre"];
        $productoNuevo -> descripcion = $req["descripcion"];
        $productoNuevo -> detalle = $req["detalle"];
        $productoNuevo -> precio = $req["precio"];
        $productoNuevo -> imagen = $nombreArchivo;
        $productoNuevo -> save();
        return redirect("/productos");
    }
}

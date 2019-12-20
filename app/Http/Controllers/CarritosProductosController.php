<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\CarritoProducto;
use App\Producto;

class CarritosProductosController extends Controller
{
    public function __construct()
     {
         $this->middleware('auth');
     }

    public function detalle($id){
    	$producto = Producto::find($id);
    	$vac = compact("carrito");
        return view("carrito",$vac);
    }  

    public function eliminar($id){
        $carritoProducto = CarritoProducto::find($id);
        $carritoProducto -> delete();
        return redirect("/carrito");
    }

    public function nuevo(){
        $carritosProductos = CarritoProducto::all();
        foreach ($carritosProductos as $carritoProducto) {
            $carritoProducto -> delete();
        }
        return redirect("/productos");
    }

    public function listado(){
    	$carritosProductos = CarritoProducto::all();
    	$importeTotal = $carritosProductos->sum('precio');    
    	$vac = compact("carritosProductos", "importeTotal");
        return view("carritoProducto",$vac);
    }    

    public function agregar($id){
    	$producto = Producto::find($id);
        $cpNuevo = new CarritoProducto();
        $cpNuevo -> idproducto = $id;
        $cpNuevo -> cantidad = 1;
        $cpNuevo -> precio = 10;
        $cpNuevo -> save();
        return redirect("/carrito");
    }

}

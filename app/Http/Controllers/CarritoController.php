<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Carrito;
class CarritoController extends Controller
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
}

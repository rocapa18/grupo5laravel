<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrito;
class CarritosController extends Controller
{
    public function nuevo(){
        $carritos = Carrito::all();
        $carritos -> delete();
        return redirect("/productos");
    }
}

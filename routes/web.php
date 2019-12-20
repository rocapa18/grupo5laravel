<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\HomeController;

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/faq', 'FaqsController@listado');
Route::get('/perfil', 'PerfilesController@listado');

Route::get('/', function () {
    return view('/home');
});

Route::get('/productos', 'ProductosController@listado');
Route::get('/productosEliminar/{id}', 'ProductosController@eliminar');
Route::get('/productosNuevo', function(){
	return view ("productoNuevo");
});
Route::post('/agregarProducto', "ProductosController@agregar");

Route::get('/detalle/{id}', 'ProductosController@detalle');

Route::get('/registro', 'RegistroController@mostrar');

Route::get('/ingreso', 'IngresoController@login');

Route::get('/contacto', function(){
	return view('contacto');
});

Route::get('/contactoListado', 'ContactoController@listado');
Route::post('/contacto', 'ContactoController@agregar');

Route::get('/carrito', 'CarritosProductosController@listado');
Route::get('/carritoProducto', 'CarritosProductosController@listado');

Route::get('/carritoProductoAgregar/{id}', 'CarritosProductosController@agregar');
Route::get('/carritoProductoEliminar/{id}', 'CarritosProductosController@eliminar');
Route::get('/carritoProductoNuevo', 'CarritosProductosController@nuevo');

Route::get('/prueba', 'PruebaCarrito@ver');

Route::get('/recuperar', function () {
    return view('recuperar');
});

Auth::routes();
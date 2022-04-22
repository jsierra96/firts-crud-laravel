<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', 'UsersController@index');

Route::post('usuarios/create', 'UsersController@store' );

Route::delete( 'usuarios/{user}', 'UsersController@destroy')->name('usuarios.destroy');

Route::get('usuarios/new', function() {
    return view('usuarios.create');
});

/**
 * Aprendiendo sobre rutas y controlares
 * 
 * Route = capa encargada de manejar el flujo
 * 
 * Controller = Nos permite agrupar lógica.
 * 
 * El método resource crea 7 rutas posibles, ('alias' , controlador)
 * 
 * php artisan make:controller  controlador --resource --model=Modelo
 * 
 * 
 * middleware
 * Filtrados a peticiones http
 * 
 * Validación ( Request )
 * función dd() sirve para ver que esta recibiendo
 * muy similar var_dump y die
 * 
 * La manera mas adecuada de realizar una validación de un formulario es creando un archivo de reglas
 * para ello contamos con la instrucción php artisan make:request NombreRequest
 * 
 * Y con ello en nuestro controlador unicamente cambiamos el parámetro recibido en la función por el request que creamos
 * asi como como la ruta del archivo ( use )
 * 
 * Blade = sistema de plantillas en laravel.
 * 
 * Para crear un sistema de pltilla podemos hgenerar layout, para ello generamos nuestro codigo html base
 * y en dobe balla enl contenido solo colocamos el helper @yield('nombre')
 * 
 * luego donde queremos incorporar esa plantilla solo usamos @extends('vista.blade')
 * y @section('nombre')
 * @endsection
 */
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
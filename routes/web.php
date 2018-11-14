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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::resource('usuarios', 'UsersController');
    Route::resource('paises', 'PaisesController');
    Route::resource('provincias', 'ProvinciasController');
    Route::resource('localidades', 'LocalidadesController');
    Route::resource('autores', 'AutoresController');
    Route::resource('generos', 'GenerosController');
    Route::resource('editoriales', 'EditorialesController');
    Route::resource('libros', 'LibrosController');
    Route::resource('proveedores', 'ProveedoresController');
    Route::resource('clientes', 'ClientesController');
    Route::resource('colecciones', 'ColeccionesController');
    
    
     /**
     * Rutas para métodos o funciones específicas
     */
    Route::get('/obtener_libros_colecciones', 'LibrosController@obtener_libros_colecciones');
    
});

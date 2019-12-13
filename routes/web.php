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

Route::get('/', 'ProductosController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

route::get('/MiPerfil/{id}', 'UserController@detalle');

route::get('/EditarPerfil/{id}', 'UserController@editar');

Route::put('/EditarPerfil', 'UserController@actualizar');

Route::get('/productos', 'ProductosController@index');

Route::get('/agregarProducto', function () {
    return view('admin.agregarProducto');
})->middleware('rol');
Route::post('/agregarProducto', 'ProductosController@agregar');

Route::get('/detalleProducto/{id}', 'ProductosController@detalle');

Route::get('/editarProductos/{id}', 'ProductosController@editar');
Route::put('/editarProducto', 'ProductosController@actualizar');

Route::get('/administrador/{id}', 'UserController@administrador');
Route::get('/ayuda', function () {
    return view('ayuda');
});

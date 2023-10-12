<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// CRUD Marcas
Route::get('/marcas', 'App\Http\Controllers\MarcaController@index');
Route::post('/marcas', 'App\Http\Controllers\MarcaController@store');
Route::put('/marcas', 'App\Http\Controllers\MarcaController@update');
Route::delete('/marcas/{id}', 'App\Http\Controllers\MarcaController@destroy');
Route::patch('/marcas', 'App\Http\Controllers\MarcaController@edit');

// CRUD Categorias
Route::get('/categorias', 'App\Http\Controllers\CategoriaController@index');
Route::post('/categorias', 'App\Http\Controllers\CategoriaController@store');
Route::put('/categorias', 'App\Http\Controllers\CategoriaController@update');
Route::delete('/categorias/{id}', 'App\Http\Controllers\CategoriaController@destroy');
Route::patch('/categorias', 'App\Http\Controllers\CategoriaController@edit');

// CRUD Productos
Route::get('/productos', 'App\Http\Controllers\ProductoController@index');
Route::post('/productos', 'App\Http\Controllers\ProductoController@store');
Route::put('/productos', 'App\Http\Controllers\ProductoController@update');
Route::delete('/productos/{id}', 'App\Http\Controllers\ProductoController@destroy');
Route::patch('/productos', 'App\Http\Controllers\ProductoController@edit');

// CRUD Roles
Route::get('/roles', 'App\Http\Controllers\RolController@index');
Route::post('/roles', 'App\Http\Controllers\RolController@store');
Route::put('/roles', 'App\Http\Controllers\RolController@update');
Route::delete('/roles/{id}', 'App\Http\Controllers\RolController@destroy');

// CRUD Personas
Route::get('/personas', 'App\Http\Controllers\PersonaController@index');
Route::post('/personas', 'App\Http\Controllers\PersonaController@store');
Route::put('/personas/{id}', 'App\Http\Controllers\PersonaController@update');
Route::delete('/personas/{id}', 'App\Http\Controllers\PersonaController@destroy');

// CRUD Usuarios
Route::get('/usuarios', 'App\Http\Controllers\UsuarioController@index');
Route::post('/usuarios/validate', 'App\Http\Controllers\UsuarioController@show');
Route::post('/usuarios', 'App\Http\Controllers\UsuarioController@store');
Route::put('/usuarios/{id}', 'App\Http\Controllers\UsuarioController@update');
Route::delete('/usuarios/{id}', 'App\Http\Controllers\UsuarioController@destroy');
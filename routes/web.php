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

Route::get('/', function () {
    return view('index');
});

// Registro y autenticación
Route::get('login', function() {
    return view('login');
});
Route::get('register', function() {
    return view('register');
});

// Área de adminstración
Route::get('admin/', function() {
    return view('admin.index');
});
Route::get('admin/marcas', function() {
    return view('admin.marcas');
});

Route::get('admin/categorias', function() {
    return view('admin.categorias');
});

Route::get('admin/productos', function() {
    return view('admin.productos');
});

Route::get('admin/roles', function() {
    return view('admin.roles');
});

// Área de cliente
Route::get('client/', function() {
    return view('client.index');
});

Route::middleware(['auth:sanctum', 'verified']) -> get('/dashboard', function() {
    return view('dashboard');
}) -> name('dashboard');
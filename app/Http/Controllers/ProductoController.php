<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Detalle_Venta;
use App\Models\Producto;
use App\Models\Marca;
use App\Models\Usuario;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::all();
        $i = 0;
        foreach($productos as $producto) {
            $marca = Marca::get()->where('id', $producto->marca_id)->first();
            $categoria = Categoria::get()->where('id', $producto->categoria_id)->first();
            $usuario = Usuario::get()->where('id', $producto->user_add)->first();
            $ventas = Detalle_Venta::where('producto_id', $producto->id)->get()->count();
            $producto->marca = $marca;
            $producto->categoria = $categoria;
            $producto->usuario = $usuario->usuario;
            $producto->ventas = $ventas;
            $productos[$i] = $producto;
            $i++;
        }
        return $productos;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        session_start();
        $producto = new Producto();
        $producto->producto = $request->producto;
        $producto->descripcion = $request->descripcion;
        $producto->marca_id = $request->marca_id;
        $producto->categoria_id = $request->categoria_id;
        $producto->precio = $request->precio;
        $producto->stock = $request->stock;
        $producto->user_add = $_SESSION['usuario']['id'];
        $producto->estado = true;

        $producto->save();

        $marca = Marca::get()->where('id', $producto->marca_id)->first();
        $categoria = Categoria::get()->where('id', $producto->categoria_id)->first();
        $usuario = Usuario::get()->where('id', $producto->user_add)->first();
        $ventas = Detalle_Venta::where('producto_id', $producto->id)->get()->count();
        $producto->marca = $marca;
        $producto->categoria = $categoria;
        $producto->usuario = $usuario->usuario;
        $producto->ventas = $ventas;

        return $producto;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $producto = Producto::findOrFail($request->id);
        $producto->estado = $request->estado;
        
        $producto->save();

        $marca = Marca::get()->where('id', $producto->marca_id)->first();
        $categoria = Categoria::get()->where('id', $producto->categoria_id)->first();
        $usuario = Usuario::get()->where('id', $producto->user_add)->first();
        $ventas = Detalle_Venta::where('producto_id', $producto->id)->get()->count();
        $producto->marca = $marca;
        $producto->categoria = $categoria;
        $producto->usuario = $usuario->usuario;
        $producto->ventas = $ventas;

        return $producto;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        session_start();
        $producto = Producto::findOrFail($request->id);
        $producto->producto = $request->producto;
        $producto->descripcion = $request->descripcion;
        $producto->marca_id = $request->marca_id;
        $producto->categoria_id = $request->categoria_id;
        $producto->precio = $request->precio;
        $producto->stock = $request->stock;
        $producto->user_add = $_SESSION['usuario']['id'];

        $producto->save();

        $marca = Marca::get()->where('id', $producto->marca_id)->first();
        $categoria = Categoria::get()->where('id', $producto->categoria_id)->first();
        $usuario = Usuario::get()->where('id', $producto->user_add)->first();
        $ventas = Detalle_Venta::where('producto_id', $producto->id)->get()->count();
        $producto->marca = $marca;
        $producto->categoria = $categoria;
        $producto->usuario = $usuario->usuario;
        $producto->ventas = $ventas;

        return $producto;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Producto::findOrFail($id);
        Producto::destroy($id);
        return $producto;
    }
}

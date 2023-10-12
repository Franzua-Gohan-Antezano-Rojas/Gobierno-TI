<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;
use App\Models\Producto;
use App\Models\Usuario;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marcas = Marca::all();
        $i = 0;
        foreach($marcas as $marca) {
            $usuario = Usuario::get()->where('id', $marca->user_add)->first();
            $productos = Producto::where('marca_id', $marca->id)->get()->count();
            $marca->usuario = $usuario->usuario;
            $marca->productos = $productos;
            $marcas[$i] = $marca;
            $i++;
        }
        return $marcas;
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
        $marca = new Marca();
        $marca->marca = $request->marca;
        $marca->descripcion = $request->descripcion;
        $marca->user_add = $_SESSION['usuario']['id'];
        $marca->estado = true;

        $marca->save();

        $usuario = Usuario::get()->where('id', $marca->user_add)->first();
        $productos = Producto::where('marca_id', $marca->id)->get()->count();
        $marca->usuario = $usuario->usuario;
        $marca->productos = $productos;

        return $marca;
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
        $marca = Marca::findOrFail($request->id);
        $marca->estado = $request->estado;

        $marca->save();
        $usuario = Usuario::get()->where('id', $marca->user_add)->first();
        $productos = Producto::where('marca_id', $marca->id)->get()->count();
        $marca->usuario = $usuario->usuario;
        $marca->productos = $productos;

        return $marca;
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
        $marca = Marca::findOrFail($request->id);
        $marca->marca = $request->marca;
        $marca->descripcion = $request->descripcion;
        $marca->user_add = $_SESSION['usuario']['id'];

        $marca->save();

        $usuario = Usuario::get()->where('id', $marca->user_add)->first();
        $productos = Producto::where('marca_id', $marca->id)->get()->count();
        $marca->usuario = $usuario->usuario;
        $marca->productos = $productos;

        return $marca;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $marca = Marca::findOrFail($id);
        Marca::destroy($id);
        return $marca;
    }
}

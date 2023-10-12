<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Producto;
use App\Models\Usuario;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria::all();
        $i = 0;
        foreach($categorias as $categoria) {
            $usuario = Usuario::get()->where('id', $categoria->user_add)->first();
            $productos = Producto::where('categoria_id', $categoria->id)->get()->count();
            $categoria->usuario = $usuario->usuario;
            $categoria->productos = $productos;
            $categorias[$i] = $categoria;
            $i++;
        }
        return $categorias;
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
        $categoria = new Categoria();
        $categoria->categoria = $request->categoria;
        $categoria->descripcion = $request->descripcion;
        $categoria->user_add = $_SESSION['usuario']['id'];
        $categoria->estado = true;

        $categoria->save();

        $usuario = Usuario::get()->where('id', $categoria->user_add)->first();
        $productos = Producto::where('categoria_id', $categoria->id)->get()->count();
        $categoria->usuario = $usuario->usuario;
        $categoria->productos = $productos;

        return $categoria;
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
        $categoria = Categoria::findOrFail($request->id);
        $categoria->estado = $request->estado;

        $categoria->save();
        $usuario = Usuario::get()->where('id', $categoria->user_add)->first();
        $productos = Producto::where('categoria_id', $categoria->id)->get()->count();
        $categoria->usuario = $usuario->usuario;
        $categoria->productos = $productos;

        return $categoria;
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
        $categoria = Categoria::findOrFail($request->id);
        $categoria->categoria = $request->categoria;
        $categoria->descripcion = $request->descripcion;
        $categoria->user_add = $_SESSION['usuario']['id'];

        $categoria->save();

        $usuario = Usuario::get()->where('id', $categoria->user_add)->first();
        $productos = Producto::where('categoria_id', $categoria->id)->get()->count();
        $categoria->usuario = $usuario->usuario;
        $categoria->productos = $productos;

        return $categoria;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoria = Categoria::findOrFail($id);
        Categoria::destroy($id);
        return $categoria;
    }
}

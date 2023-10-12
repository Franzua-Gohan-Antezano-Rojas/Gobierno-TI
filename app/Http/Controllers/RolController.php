<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rol;
use App\Models\Usuario;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Rol::all();
        $i = 0;
        foreach($roles as $rol) {
            $usuarios = Usuario::where('rol_id', $rol->id)->get()->count();
            $rol->usuarios = $usuarios;
            $roles[$i] = $rol;
            $i++;
        }
        return $roles;
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
        $rol = new Rol();
        $rol->rol = $request->rol;
        $rol->descripcion = $request->descripcion;

        $rol->save();

        $usuarios = Usuario::where('rol_id', $rol->id)->get()->count();
        $rol->usuarios = $usuarios;
        
        return $rol;
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
    public function edit($id)
    {
        //
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
        $rol = Rol::findOrFail($request->id);
        $rol->rol = $request->rol;
        $rol->descripcion = $request->descripcion;

        $rol->save();

        $usuarios = Usuario::where('rol_id', $rol->id)->get()->count();
        $rol->usuarios = $usuarios;

        return $rol;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rol = Rol::findOrFail($id);
        Rol::destroy($id);
        return $rol;
    }
}

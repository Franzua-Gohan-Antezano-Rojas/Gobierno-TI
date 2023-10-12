<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Persona;
use App\Models\Rol;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::all();
        return $usuarios;
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
        $usuario = new Usuario();
        $usuario->usuario = $request->usuario;
        $usuario->clave = hash('sha256', $request->clave);
        $usuario->foto = null;
        $usuario->rol_id = $request->rol_id;
        $usuario->persona_id = $request->persona_id;
        $usuario->estado = true;

        $usuario->save();

        if ($request->activateSession) {
            $persona = Persona::get()->where('id', $usuario->persona_id)->first();
            $persona = $persona;
            $rol = Rol::get()->where('id', $usuario->rol_id)->first();
            $rol = $rol;
            session_start();
            $_SESSION['usuario'] = $usuario;
            $_SESSION['usuario']['persona'] = $persona;
            $_SESSION['usuario']['rol'] = $rol;
            return $_SESSION;
        } else {
            return $usuario;
        }        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        session_start();
        session_destroy();
        session_unset();
        $clave = hash('sha256', $request->clave);
        $usuario = Usuario::get()->where('usuario', $request->usuario)->where('clave', $clave)->first();
        $persona = Persona::get()->where('id', $usuario->persona_id)->first();
        $rol = Rol::get()->where('id', $usuario->rol_id)->first();
        $rol = $rol;
        session_start();
        $_SESSION['usuario'] = $usuario;
        $_SESSION['usuario']['persona'] = $persona;
        $_SESSION['usuario']['rol'] = $rol;
        return $_SESSION;
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
        $usuario = Usuario::findOrFail($request->id);
        $usuario->usuario = $request->usuario;
        $usuario->clave = hash('sha256', $request->clave);
        $usuario->foto = $request->foto;
        $usuario->persona_id = $request->persona_id;

        $usuario->save();

        return $usuario;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->estado = false;

        $usuario->save();

        return $usuario;
    }
}

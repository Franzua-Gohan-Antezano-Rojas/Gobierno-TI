<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personas = Persona::all();
        return $personas;
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
        $persona = new Persona();
        $persona->dni = $request->dni;
        $persona->apePater = $request->apePater;
        $persona->apeMater = $request->apeMater;
        $persona->nombres = $request->nombres;
        $persona->sexo = $request->sexo;
        $persona->fec_nac = $request->fec_nac;
        $persona->correo = $request->correo;
        $persona->telefono = $request->telefono;
        $persona->direccion = $request->direccion;
        $persona->estado = true;

        $persona->save();

        return $persona;
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
        $persona = Persona::findOrFail($request->id);
        $persona->dni = $request->dni;
        $persona->apePater = $request->apePater;
        $persona->apeMater = $request->apeMater;
        $persona->nombres = $request->nombres;
        $persona->sexo = $request->sexo;
        $persona->fec_nac = $request->fec_nac;
        $persona->correo = $request->correo;
        $persona->telefono = $request->telefono;
        $persona->direccion = $request->direccion;

        $persona->save();

        return $persona;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $persona = Persona::findOrFail($id);
        $persona->estado = false;

        $persona->save();

        return $persona;
    }
}

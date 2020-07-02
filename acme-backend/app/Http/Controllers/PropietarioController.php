<?php

namespace App\Http\Controllers;

use App\Propietario;
use Illuminate\Http\Request;

class PropietarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $propietarios = Propietario::all();
        return $propietarios;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Propietario  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function show(Propietario $propietario)
    {
        return  Propietario::find($propietario->id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $propietario = Propietario::create($request->all());
        return $propietario;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Propietario  $propietario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Propietario $propietario)
    {
        $propietario = Propietario::find($propietario->id);
        $propietario->update($request->all());
        return $propietario;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Propietario  $propietario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Propietario $propietario)
    {
        Propietario::destroy($propietario->id);
    }
}

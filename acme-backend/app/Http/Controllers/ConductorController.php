<?php

namespace App\Http\Controllers;

use App\Conductor;
use Illuminate\Http\Request;

class ConductorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conductores = Conductor::all();
        return $conductores;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Conductor  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function show(Conductor $conductor)
    {
        return Conductor::find($conductor->id);
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $conductor = Conductor::create($request->all());
        return $conductor;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Conductor  $conductor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Conductor $conductor)
    {
        $conductor = Conductor::find($conductor->id);
        $conductor->update($request->all());
        return $conductor;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Conductor  $conductor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Conductor $conductor)
    {
        Conductor::destroy($conductor->id);
    }
}

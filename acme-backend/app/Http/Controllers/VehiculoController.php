<?php

namespace App\Http\Controllers;

use App\Vehiculo;
use App\Conductor;
use App\Propietario;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehiculos = Vehiculo::all();
        $vehiculosFinal = array();
        $i = 0;
        foreach($vehiculos as $vehiculo) {
            $vehiculo = Vehiculo::find($vehiculo->id);
            $conductor = Conductor::find($vehiculo->id_conductor);
            $propietario = Propietario::find($vehiculo->id_propietario);
            $result = [
                "id" => $vehiculo->id,
                "placa" => $vehiculo->placa,
                "color" => $vehiculo->color,
                "marca" => $vehiculo->marca,
                "tipo_vehiculo" => $vehiculo->tipo_vehiculo,
                "conductor" => $conductor->primer_nombre . " " . $conductor->segundo_nombre . " " . $conductor->apellidos,
                "propietario" => $propietario->primer_nombre . " " . $propietario->segundo_nombre . " " . $propietario->apellidos,  
                "id_conductor" => $vehiculo->id_conductor,
                "id_propietario" => $vehiculo->id_propietario
            ];
            $vehiculos[$i] = $result;
            $i++;
        }
        return $vehiculos;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function show(Vehiculo $vehiculo)
    {
        $vehiculo = Vehiculo::find($vehiculo->id);
        $conductor = Conductor::find($vehiculo->id_conductor);
        $propietario = Propietario::find($vehiculo->id_propietario);
        $result = [
            "id" => $vehiculo->id,
            "placa" => $vehiculo->placa,
            "color" => $vehiculo->color,
            "marca" => $vehiculo->marca,
            "tipo_vehiculo" => $vehiculo->tipo_vehiculo,
            "conductor" => $conductor->primer_nombre . " " . $conductor->segundo_nombre . " " . $conductor->apellidos,
            "propietario" => $propietario->primer_nombre . " " . $propietario->segundo_nombre . " " . $propietario->apellidos,  
            "id_conductor" => $vehiculo->id_conductor,
            "id_propietario" => $vehiculo->id_propietario
        ];
        return $result;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vehiculo = Vehiculo::create($request->all());

        $vehiculo = Vehiculo::find($vehiculo->id);
        $conductor = Conductor::find($vehiculo->id_conductor);
        $propietario = Propietario::find($vehiculo->id_propietario);
        $result = [
            "id" => $vehiculo->id,
            "placa" => $vehiculo->placa,
            "color" => $vehiculo->color,
            "marca" => $vehiculo->marca,
            "tipo_vehiculo" => $vehiculo->tipo_vehiculo,
            "conductor" => $conductor->primer_nombre . " " . $conductor->segundo_nombre . " " . $conductor->apellidos,
            "propietario" => $propietario->primer_nombre . " " . $propietario->segundo_nombre . " " . $propietario->apellidos
        ];

        return $result;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehiculo $vehiculo)
    {
        $vehiculo = vehiculo::find($vehiculo->id);
        $vehiculo->update($request->all());
        $conductor = Conductor::find($vehiculo->id_conductor);
        $propietario = Propietario::find($vehiculo->id_propietario);
        $result = [
            "id" => $vehiculo->id,
            "placa" => $vehiculo->placa,
            "color" => $vehiculo->color,
            "marca" => $vehiculo->marca,
            "tipo_vehiculo" => $vehiculo->tipo_vehiculo,
            "conductor" => $conductor->primer_nombre . " " . $conductor->segundo_nombre . " " . $conductor->apellidos,
            "propietario" => $propietario->primer_nombre . " " . $propietario->segundo_nombre . " " . $propietario->apellidos
        ];
        return $result;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehiculo $vehiculo)
    {
        Vehiculo::destroy($vehiculo->id);
    }
}

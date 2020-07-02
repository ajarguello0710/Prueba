<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $fillable = ["placa", "color", "marca", "tipo_vehiculo", "id_conductor", "id_propietario"];
}

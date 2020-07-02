<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conductor extends Model
{
    protected $fillable = ["numero_cedula", "primer_nombre", "segundo_nombre", "apellidos", "direccion", "telefono", "ciudad"];    
}

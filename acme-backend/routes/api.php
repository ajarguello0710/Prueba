<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('propietario', 'PropietarioController');
Route::apiResource('conductor', 'ConductorController');
Route::apiResource('vehiculo', 'VehiculoController');
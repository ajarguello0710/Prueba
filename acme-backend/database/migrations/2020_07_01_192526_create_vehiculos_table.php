<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->string('placa', 6);
            $table->string('color', 15);
            $table->string('marca', 30);
            $table->string('tipo_vehiculo', 11);
            $table->unsignedBigInteger('id_conductor');
            $table->unsignedBigInteger('id_propietario');
            $table->timestamps();

            $table->foreign('id_conductor')->references('id')->on('conductors');
            $table->foreign('id_propietario')->references('id')->on('propietarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehiculos');
    }
}

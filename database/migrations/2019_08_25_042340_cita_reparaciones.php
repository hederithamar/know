<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CitaReparaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cita_reparaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->int('id_cliente')->nullable();
            $table->int('id_centro')->nullable();
            $table->date('fecha')->nullable();
            $table->float('hora')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cita_reparaciones');
    }
}

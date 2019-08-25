<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatMotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_motos', function (Blueprint $table) {
            $table->increments('id');
            $table->double('precio')->nullable();
            $table->string('ubicacion')->nullable();
            $table->integer('anio')->nullable();
            $table->float('kilometraje')->nullable();
            $table->string('color')->nullable();
            $table->string('hecho_por')->nullable();
            $table->string('modelo')->nullable();
            $table->string('submodelo')->nullable();
            $table->string('tipo')->nullable();
            $table->decimal('porcentaje')->nullable();
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
        Schema::dropIfExists('cat_motos');
    }
}

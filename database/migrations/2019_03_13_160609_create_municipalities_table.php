<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMunicipalitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('municipalities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 60);
            $table->string('sort', 20);
            $table->string('code', 15);
            $table->timestamps();
            $table->softDeletes();
            //clave foranea que relaciona a la tabla de estados
            $table->integer('state_id')->unsigned();

            $table->foreign('state_id')->references('id')
                ->on(config('access.states_table'))
                ->onDelete('cascade')
                ->onUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('municipalities');
    }
}

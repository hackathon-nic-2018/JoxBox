<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_categoria')->unsigned();
            $table->integer('id_empleado')->unsigned();
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('años_experiencia');
            $table->string('puesto');
            $table->string('estado_laboral');
            $table->string('aspiracion_salarial');
            $table->string('imagen');

            $table->foreign('id_categoria')->references('id')->on('categories');
            $table->foreign('id_empleado')->references('id')->on('employees');
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
        Schema::dropIfExists('offers');
    }
}

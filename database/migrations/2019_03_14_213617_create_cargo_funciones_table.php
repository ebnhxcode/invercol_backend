<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCargoFuncionesTable extends Migration
{

    public function up()
    {
        Schema::create('cargo_funciones', function (Blueprint $table) {
            $table->increments('cargo_funcion_id');

            $table->integer('cargo_id')->nullable();
            $table->integer('funcion_id')->nullable();


            /**
             * Campos de seguimiento
             */
            $table->integer('creado_por_usuario_id')->nullable();
            $table->integer('modificado_por_usuario_id')->nullable();
            $table->integer('eliminado_por_usuario_id')->nullable();
            #

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cargo_funciones');
    }
}

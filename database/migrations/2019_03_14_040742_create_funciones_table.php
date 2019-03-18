<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncionesTable extends Migration
{

    public function up()
    {
        Schema::create('funciones', function (Blueprint $table) {
            $table->increments('funcion_id');

            
            $table->string('funcion_codigo', 255)->nullable();
            $table->string('funcion_nombre', 255)->nullable();
            $table->string('funcion_descripcion', 5000)->nullable();

            $table->integer('tipo_funcion_id')->nullable();
            $table->integer('cargo_id')->nullable();

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
        Schema::dropIfExists('funciones');
    }
}

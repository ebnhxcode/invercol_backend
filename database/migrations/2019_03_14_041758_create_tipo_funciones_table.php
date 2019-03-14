<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoFuncionesTable extends Migration
{

    public function up()
    {
        Schema::create('tipo_funciones', function (Blueprint $table) {
            $table->increments('tipo_funciones_id');

            $table->string('tipo_funcion_codigo', 255)->nullable();
            $table->string('tipo_funcion_nombre', 255)->nullable();
            $table->string('tipo_funcion_descripcion', 5000)->nullable();

            /**
             * Campos de seguimiento
             */
            $table->integer('creado_por_usuario_id')->nullable();
            $table->integer('modificado_por_usuario_id')->nullable();
            $table->integer('eliminado_por_usuario_id')->nullable();

            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('tipo_funciones');
    }
}

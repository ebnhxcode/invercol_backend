<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoContratosTable extends Migration
{

    public function up()
    {
        Schema::create('tipo_contratos', function (Blueprint $table) {
            $table->increments('tipo_contrato_id');

            $table->string('tipo_contrato_codigo', 255)->nullable();
            $table->string('tipo_contrato_nombre', 255)->nullable();
            $table->string('tipo_contrato_descripcion', 5000)->nullable();
            

            /**
             * Campos de seguimiento
             */
            $table->integer('creado_por_usuario_id');
            $table->integer('modificado_por_usuario_id');
            $table->integer('eliminado_por_usuario_id');
            #

            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('tipo_contratos');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContratosTable extends Migration
{

    public function up()
    {
        Schema::create('contratos', function (Blueprint $table) {
            $table->increments('contrato_id');
            
            $table->integer('ficha_id')->nullable();
            $table->integer('tipo_contrato_id')->nullable();
            $table->integer('cargo_id')->nullable();
            
            $table->date('contrato_fecha_inicio')->nullable();
            $table->string('contrato_horas_semanal', 20)->nullable();
            $table->string('contrato_sueldo_base', 20)->nullable();

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
        Schema::dropIfExists('contratos');
    }
}

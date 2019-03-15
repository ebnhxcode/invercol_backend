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

            $table->date('contrato_fecha_inicio')->nullable();

            $table->string('contrato_horas_semanales', 20)->nullable();
            $table->string('contrato_sueldo_base', 20)->nullable();
            $table->string('contrato_valor_hora', 20)->nullable();

            $table->integer('ficha_trabajador_id')->nullable();
            $table->integer('tipo_contrato_id')->nullable();

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
        Schema::dropIfExists('contratos');
    }
}

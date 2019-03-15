<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFichaTrabajadoresTable extends Migration
{

    public function up()
    {
        Schema::create('ficha_trabajadores', function (Blueprint $table) {
            $table->increments('ficha_trabajador_id');

            $table->date('ficha_fecha_ingreso')->nullable();
            
            $table->integer('sueldo_base')->nullable();
            $table->integer('horas_semanales')->nullable();
            $table->integer('horas_extras')->nullable();
            $table->integer('bono')->nullable();
            
            $table->integer('trabajador_id')->nullable();
            $table->integer('establecimiento_id')->nullable();
            $table->integer('tipo_contrato_id')->nullable();
            $table->integer('subvencion_id')->nullable();

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
        Schema::dropIfExists('ficha_trabajadores');
    }
}

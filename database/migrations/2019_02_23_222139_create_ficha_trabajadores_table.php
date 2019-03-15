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

            $table->string('ficha_rut')->nullable();
            $table->string('ficha_dv')->nullable();

            $table->string('ficha_genero')->nullable();

            $table->string('ficha_nombre')->nullable();
            $table->string('ficha_apellido_paterno')->nullable();
            $table->string('ficha_apellido_materno')->nullable();
            $table->string('ficha_fecha_nacimiento')->nullable();
            
            $table->date('ficha_fecha_ingreso')->nullable();
            
            $table->integer('ficha_sueldo_base')->nullable();
            $table->integer('ficha_horas_semanales')->nullable();
            $table->integer('ficha_horas_extras')->nullable();
            $table->integer('ficha_bono')->nullable();
            
            $table->integer('establecimiento_id')->nullable();
            $table->integer('subvencion_id')->nullable();
            $table->integer('cargo_id')->nullable();
            $table->integer('rbd_id')->nullable();

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

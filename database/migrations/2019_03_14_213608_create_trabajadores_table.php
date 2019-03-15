<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrabajadoresTable extends Migration
{

    public function up()
    {
        Schema::create('trabajadores', function (Blueprint $table) {
            $table->increments('trabajador_id');


            $table->string('trabajador_rut', 12)->nullable();
            $table->string('trabajador_dv', 2)->nullable();

            $table->string('trabajador_genero', 10)->nullable();
            $table->string('trabajador_nombre', 50)->nullable();
            $table->string('trabajador_apellido_paterno', 50)->nullable();
            $table->string('trabajador_apellido_materno', 50)->nullable();
            $table->date('trabajador_fecha_nacimiento', 50)->nullable();

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
        Schema::dropIfExists('trabajadores');
    }
}

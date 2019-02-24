<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFichaTrabajadorsTable extends Migration
{

    public function up()
    {
        Schema::create('ficha_trabajadores', function (Blueprint $table) {
            $table->increments('ficha_trabajador_id');

            $table->string('ficha_rut', 10)->nullable();
            $table->string('ficha_dv', 1)->nullable();

            $table->string('ficha_genero', 255)->nullable();
            $table->string('ficha_nombre', 255)->nullable();
            $table->string('ficha_apellido_paterno', 255)->nullable();
            $table->string('ficha_apellido_materno', 255)->nullable();
            
            $table->date('ficha_fecha_nacimiento')->nullable();
            

            /**
             * Campos de seguimiento
             */
            $table->integer('creado_por_usuario_id');
            $table->integer('modificado_por_usuario_id');
            $table->integer('eliminado_por_usuario_id');
            #

            $table->integer('establecimiento_id')->nullable();

            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('ficha_trabajadores');
    }
}

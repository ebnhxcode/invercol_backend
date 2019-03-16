<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstablecimientosTable extends Migration
{

    public function up()
    {
        Schema::create('establecimientos', function (Blueprint $table) {
            $table->increments('establecimiento_id');

            $table->string('establecimiento_nombre', 255)->nullable();
            $table->string('establecimiento_direccion', 255)->nullable();
            $table->string('establecimiento_descripcion', 5000)->nullable();

            /**
             * Campos de seguimiento
             */
            $table->integer('creado_por_usuario_id')->nullable();
            $table->integer('modificado_por_usuario_id')->nullable();
            $table->integer('eliminado_por_usuario_id')->nullable();
            #

            $table->integer('region_id')->nullable();
            $table->integer('comuna_id')->nullable();

            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('establecimientos');
    }
}

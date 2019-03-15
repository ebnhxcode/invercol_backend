<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrabajadorRbdsTable extends Migration
{

    public function up()
    {
        Schema::create('trabajador_rbds', function (Blueprint $table) {
            $table->increments('trabajador_rbd_id');

            $table->integer('trabajador_id')->nullable();
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
        Schema::dropIfExists('trabajador_rbds');
    }
}

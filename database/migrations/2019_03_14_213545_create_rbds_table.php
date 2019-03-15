<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRbdsTable extends Migration
{

    public function up()
    {
        Schema::create('rbds', function (Blueprint $table) {
            $table->increments('rbd_id');

            $table->string('rbd_codigo', 255)->nullable();
            $table->string('rbd_nombre', 255)->nullable();
            $table->string('rbd_descripcion', 5000)->nullable();

            $table->integer('establecimiento_id')->nullable();

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
        Schema::dropIfExists('rbds');
    }
}

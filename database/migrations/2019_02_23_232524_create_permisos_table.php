<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermisosTable extends Migration
{

    public function up()
    {
        Schema::create('permisos', function (Blueprint $table) {
            $table->increments('permiso_id');

            $table->string('permiso_nombre', 255)->nullable();
            $table->string('permiso_descripcion', 5000)->nullable();

            $table->integer('permiso_nivel')->nullable();
            $table->integer('permiso_orden')->nullable();

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
        Schema::dropIfExists('permisos');
    }
}

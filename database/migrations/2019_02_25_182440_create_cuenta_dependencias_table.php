<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuentaDependenciasTable extends Migration
{

    public function up()
    {
        Schema::create('cuenta_dependencias', function (Blueprint $table) {
            $table->increments('cuenta_dependencia_id');
            
            $table->string('cuenta_dependencia_codigo', 255)->nullable();
            $table->string('cuenta_dependencia_nombre', 255)->nullable();
            $table->string('cuenta_dependencia_descripcion', 5000)->nullable();

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
        Schema::dropIfExists('cuenta_dependencias');
    }
}

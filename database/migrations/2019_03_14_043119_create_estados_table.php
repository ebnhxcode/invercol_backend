<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstadosTable extends Migration
{

    public function up()
    {
        Schema::create('estados', function (Blueprint $table) {
            $table->increments('estado_id');
            
            $table->string('estado_codigo', 255)->nullable();
            $table->string('estado_nombre', 255)->nullable();
            $table->string('estado_descripcion', 5000)->nullable();

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
        Schema::dropIfExists('estados');
    }
}

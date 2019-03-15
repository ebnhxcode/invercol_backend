<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoSubvencionesTable extends Migration
{

    public function up()
    {
        Schema::create('tipo_subvenciones', function (Blueprint $table) {
            $table->increments('tipo_subvencion_id');

            $table->string('tipo_subvencion_codigo', 255)->nullable();
            $table->string('tipo_subvencion_nombre', 255)->nullable();
            $table->string('tipo_subvencion_descripcion', 5000)->nullable();


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
        Schema::dropIfExists('tipo_subvenciones');
    }
}

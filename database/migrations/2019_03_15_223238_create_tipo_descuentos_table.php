<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoDescuentosTable extends Migration
{

    public function up()
    {
        Schema::create('tipo_descuentos', function (Blueprint $table) {
            $table->increments('tipo_descuento_id');

            $table->string('tipo_descuento_codigo')->nullable();
            $table->string('tipo_descuento_nombre')->nullable();

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
        Schema::dropIfExists('tipo_descuentos');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoValoresMonetariosTable extends Migration
{

    public function up()
    {
        Schema::create('tipo_valores_monetarios', function (Blueprint $table) {
            $table->increments('tipo_valor_monetario_id');
            $table->string('tipo_valor_monetario_nombre', 255)->nullable();
            $table->string('tipo_valor_monetario_descripcion', 5000)->nullable();

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
        Schema::dropIfExists('tipo_valores_monetarios');
    }
}

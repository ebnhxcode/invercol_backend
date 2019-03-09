<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateValoresMonetariosTable extends Migration
{

    public function up()
    {
        Schema::create('valores_monetarios', function (Blueprint $table) {
            $table->increments('valor_monetario_id');
            $table->string('valor_monetario_nombre', 255)->nullable();
            $table->string('valor_monetario_descripcion', 5000)->nullable();

            $table->integer('tipo_valor_monetario_id')->nullable();

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
        Schema::dropIfExists('valores_monetarios');
    }
}

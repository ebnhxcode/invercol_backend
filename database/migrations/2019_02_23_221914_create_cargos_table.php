<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCargosTable extends Migration
{

    public function up()
    {
        Schema::create('cargos', function (Blueprint $table) {
            $table->increments('cargo_id');
            
            $table->string('cargo_nombre', 255)->nullable();
            $table->string('cargo_descripcion', 5000)->nullable();

            /**
             * Campos de seguimiento
             */
            $table->integer('creado_por_usuario_id');
            $table->integer('modificado_por_usuario_id');
            $table->integer('eliminado_por_usuario_id');
            #

            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('cargos');
    }
}

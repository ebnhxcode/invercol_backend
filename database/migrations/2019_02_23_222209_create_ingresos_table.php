<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngresosTable extends Migration
{

    public function up()
    {
        Schema::create('ingresos', function (Blueprint $table) {
            $table->increments('ingreso_id');

            $table->string('ingreso_codigo', 255)->nullable();
            $table->string('ingreso_nombre', 255)->nullable();
            $table->string('ingreso_descripcion', 255)->nullable();

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
        Schema::dropIfExists('ingresos');
    }
}

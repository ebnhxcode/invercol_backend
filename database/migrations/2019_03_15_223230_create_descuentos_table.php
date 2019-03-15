<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDescuentosTable extends Migration
{

    public function up()
    {
        Schema::create('descuentos', function (Blueprint $table) {
            $table->increments('descuento_id');

            $table->integer('descuento_monto')->nullable();
            $table->string('descuento_comentario', 255)->nullable();
            $table->date('descuento_fecha_ingreso')->nullable();

            $table->integer('tipo_descuento_id')->nullable();

            /**
             * Campos de seguimiento
             */
            $table->integer('creado_por_usuario_id')->nullable();
            $table->integer('modificado_por_usuario_id')->nullable();
            $table->integer('eliminado_por_usuario_id')->nullable();
            #


            /*
              Descuento o Concepto de descuento ( se selecciona)
              Monto del descuento 
              Comentario (punto de control)
              Fecha de ingreso (Selector de fecha para obtener mes y año del ingreso )
            */
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('descuentos');
    }
}

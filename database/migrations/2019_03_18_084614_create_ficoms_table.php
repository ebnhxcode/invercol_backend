<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFicomsTable extends Migration
{

    public function up()
    {
        Schema::create('ficoms', function (Blueprint $table) {
            $table->increments('ficom_id');

            $table->string('ficom_tiene_run');
            $table->string('ficom_run');
            $table->string('ficom_dv');
            $table->string('ficom_anio');

            $table->integer('ficom_monto');
            $table->integer('ficom_interes');
            $table->integer('ficom_mensualidades');

            $table->integer('rbd_id');
            $table->integer('tipo_documento_id');
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
        Schema::dropIfExists('ficoms');
    }
}

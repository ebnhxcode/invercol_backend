<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedoresTable extends Migration
{

    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->increments('proveedor_id');

            $table->string('proveedor_nombre');
            $table->string('proveedor_run');
            $table->string('proveedor_dv');

            $table->integer('rbd_id');

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
        Schema::dropIfExists('proveedores');
    }
}

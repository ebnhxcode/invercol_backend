<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibroCuentasTable extends Migration
{
    public function up()
    {
        Schema::create('libro_cuentas', function (Blueprint $table) {
          $table->increments('libro_cuenta_id');

          $table->integer('libro_id')->nullable();
          $table->integer('cuenta_id')->nullable();

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
        Schema::dropIfExists('libro_cuentas');
    }
}

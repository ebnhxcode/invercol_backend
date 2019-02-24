<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibrosTable extends Migration
{

    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
          $table->increments('libro_id');

          $table->string('libro_codigo', 255)->nullable();
          $table->string('libro_nombre', 255)->nullable();
          $table->string('libro_descripcion', 5000)->nullable();


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
        Schema::dropIfExists('libros');
    }
}

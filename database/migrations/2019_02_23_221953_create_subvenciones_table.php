<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubvencionsTable extends Migration
{

    public function up()
    {
        Schema::create('subvenciones', function (Blueprint $table) {
          $table->increments('subvencion_id');
          
          $table->string('subvencion_codigo', 255)->nullable();
          $table->string('subvencion_nombre', 255->nullable();
          $table->string('subvencion_descripcion', 5000)->nullable();
          

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
        Schema::dropIfExists('subvenciones');
    }
}

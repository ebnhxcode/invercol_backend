<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{

    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
          $table->increments('role_id');

          $table->string('role_nombre', 255)->nullable();
          $table->string('role_descripcion', 5000)->nullable();

          $table->integer('role_orden')->nullable();

          $table->integer('permiso_id')->nullable();

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
        Schema::dropIfExists('roles');
    }
}

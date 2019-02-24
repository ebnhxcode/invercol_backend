<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{

    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('usuario_id');

            $table->string('usuario_nombre');
            $table->string('usuario_email')->unique();
            $table->string('password');


            $table->integer('role_id')->nullable();#No es tipo usuario, es el rol en el sistema
            $table->integer('estado_id')->nullable();
            $table->integer('tipo_usuario_id')->nullable();#Tipo usuario en la empresa

            /**
             * Campos de seguimiento
             */
            $table->integer('creado_por_usuario_id')->nullable();
            $table->integer('modificado_por_usuario_id')->nullable();
            $table->integer('eliminado_por_usuario_id')->nullable();
            #

            $table->timestamp('email_verified_at')->nullable();
            

            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}

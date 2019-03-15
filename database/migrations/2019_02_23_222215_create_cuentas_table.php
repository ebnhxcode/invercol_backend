<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuentasTable extends Migration
{

    public function up()
    {
        Schema::create('cuentas', function (Blueprint $table) {
            $table->integer('cuenta_id')->nullable();

            $table->string('cuenta_codigo', 255)->nullable();
            $table->string('cuenta_nombre', 255)->nullable();
            $table->string('cuenta_descripcion', 5000)->nullable();
            
            $table->integer('cuenta_titular')->nullable();

            $table->integer('cuenta_dependencia_id')->nullable();
            


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
        Schema::dropIfExists('cuentas');
    }
}

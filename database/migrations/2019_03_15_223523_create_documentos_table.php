<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentosTable extends Migration
{

    public function up()
    {
        Schema::create('documentos', function (Blueprint $table) {
            $table->increments('documento_id');

            $table->date('documento_fecha')->nullable();
            $table->date('documento_fecha_ingreso')->nullable();
            

            $table->string('documento_descripcion', 5000)->nullable();

            $table->integer('documento_monto')->nullable();
            $table->integer('documento_numero')->nullable();

            
            
            $table->integer('tipo_documento_id')->nullable();
            $table->integer('rbd_id')->nullable();
            $table->integer('proveedor_id')->nullable();
            $table->integer('libro_id')->nullable();
            

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
        Schema::dropIfExists('documentos');
    }
}

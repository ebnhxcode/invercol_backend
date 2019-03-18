<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleDocumentosTable extends Migration
{

    public function up()
    {
        Schema::create('detalle_documentos', function (Blueprint $table) {
            $table->increments('detalle_documento_id');


            $table->string('detalle_documento_numero')->nullable();
            $table->integer('detalle_documento_gasto')->nullable();
          
            $table->integer('documento_id')->nullable();
            $table->integer('subvencion_id')->nullable();
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
        Schema::dropIfExists('detalle_documentos');
    }
}

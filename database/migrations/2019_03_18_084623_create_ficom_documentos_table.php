<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFicomDocumentosTable extends Migration
{

    public function up()
    {
        Schema::create('ficom_documentos', function (Blueprint $table) {
            $table->increments('ficom_documento_id');

            $table->string('ficom_numero_documento');
            $table->integer('ficom_id');

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
        Schema::dropIfExists('ficom_documentos');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibroTipoDocumentosTable extends Migration
{

    public function up()
    {
        Schema::create('libro_tipo_documentos', function (Blueprint $table) {
            $table->increments('libro_tipo_documento_id');

            $table->integer('libro_id');
            $table->integer('tipo_documento_id');



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
        Schema::dropIfExists('libro_tipo_documentos');
    }
}

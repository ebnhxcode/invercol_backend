<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibroSubvencionesTable extends Migration
{

    public function up()
    {
        Schema::create('libro_subvenciones', function (Blueprint $table) {
            $table->increments('libro_subvencion_id');


            
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('libro_subvenciones');
    }
}

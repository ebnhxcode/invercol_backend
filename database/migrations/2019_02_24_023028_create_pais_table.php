<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaisTable extends Migration
{

    public function up()
    {
        Schema::create('paises', function (Blueprint $table) {
            $table->integer('pais_id');
            $table->integer('pais_nombre')->nullable();

            $table->integer('continente_id')->nullable();

            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('paises');
    }
}

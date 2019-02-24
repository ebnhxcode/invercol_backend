<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegionesTable extends Migration
{

    public function up()
    {
        Schema::create('regiones', function (Blueprint $table) {
            $table->integer('region_id');

            $table->string('region_nombre')->nullable();
            $table->string('region_alias')->nullable();
            $table->integer('region_orden')->nullable();

            $table->integer('pais_id')->nullable();


            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('regiones');
    }
}

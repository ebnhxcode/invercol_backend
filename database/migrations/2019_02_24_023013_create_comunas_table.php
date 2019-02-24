<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComunasTable extends Migration
{

    public function up()
    {
        Schema::create('comunas', function (Blueprint $table) {
            $table->integer('comuna_id');
            $table->string('comuna_nombre', 255)->nullable();

            $table->integer('region_id')->nullable();
            
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('comunas');
    }
}

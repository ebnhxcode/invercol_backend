<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContinentesTable extends Migration
{

    public function up()
    {
        Schema::create('continentes', function (Blueprint $table) {
            $table->integer('continente_id');
            $table->string('continente_nombre', 255)->nullable();

            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('continentes');
    }
}

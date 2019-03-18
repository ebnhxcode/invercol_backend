<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRbdProveedoresTable extends Migration
{

    public function up()
    {
        Schema::create('rbd_proveedores', function (Blueprint $table) {
            $table->increments('rbd_proveedor_id');


            
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('rbd_proveedores');
    }
}

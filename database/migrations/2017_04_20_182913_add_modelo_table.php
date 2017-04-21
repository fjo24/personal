<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddModeloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modelo', function (Blueprint $table) {
            $table->increments('idmodelo');
            $table->integer('idmarca')->unsigned();
            $table->string('nombre');
            $table->string('condicion');
            $table->foreign('idmarca')->references('idmarca')->on('marca');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('modelo');
    }
}

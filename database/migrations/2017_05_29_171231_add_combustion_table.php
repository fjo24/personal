<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCombustionTable extends Migration
{

    public function up()
    {
        Schema::create('combustion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->timestamps();
        });
            Schema::create('combustion_vehiculo', function (Blueprint $table){
            $table->increments('id');
            $table->integer('combustion_id')->unsigned();
            $table->integer('vehiculo_id')->unsigned();

            $table->foreign('combustion_id')->references('id')->on('combustion')->onDelete('cascade');
            $table->foreign('vehiculo_id')->references('id')->on('vehiculo')->onDelete('cascade');

            $table->timestamps();          
            
        });  
    }

    public function down()
    {
        Schema::drop('combustion_vehiculo');
        Schema::drop('combustion');
    }
}

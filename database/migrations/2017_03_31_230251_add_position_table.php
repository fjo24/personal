<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddPositionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('position', function (Blueprint $table) {
            $table->increments('idposition');
            $table->string('name');
            $table->string('condicion');
            $table->timestamps();

        });
    }

    
    public function down()
    {
        Schema::drop('position');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddTipoDocsTable extends Migration
{

    public function up()
    {
        Schema::create('tipo_docs', function (Blueprint $table) {

            $table->increments('idtipo_doc')->unsigned();
            $table->string('codigo');
            $table->string('nombre');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('tipo_docs');
    }
}

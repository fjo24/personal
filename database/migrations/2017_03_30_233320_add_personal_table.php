<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddPersonalTable extends Migration
{

    public function up()
    {
        Schema::create('HR_PER_PEOPLE_inf', function (Blueprint $table) {

            $table->increments('id');
            $table->string('FIRST_NAME', 50);
            $table->string('SECOND_NAME', 50);
            $table->string('first_LAST_NAME', 50);
            $table->string('SECOND_LAST_NAME', 50);

            $table->date('DATE_OF_BIRTH');
            $table->enum('SEX', ['M', 'F']);
            $table->integer('idtipo_doc')->unsigned();
            $table->integer('EMPLOYEE_NUMBER');

            $table->date('EFFECTIVE_START_DATE');
            $table->date('EFFECTIVE_END_DATE');
            $table->integer('idposition')->unsigned();
            $table->string('EMAIL_ADDRESS');
            $table->string('TELEF1');
            $table->string('TELEF2');

            $table->integer('SALARY');
            $table->integer('SOLD_MIN');
            $table->integer('DISCCOUNT');

            $table->string('COUNTY', 50);
            $table->string('ADDRESS', 50);

            //$table->foreign('idtipo_doc')->references('idtipo_doc')->on('tipo_docs');
            //$table->foreign('idposition')->references('idposition')->on('position');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('HR_PER_PEOPLE_inf');
    }
}

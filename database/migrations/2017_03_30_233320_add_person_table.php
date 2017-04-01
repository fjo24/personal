<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPersonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('HR_PER_PEOPLE_inf', function (Blueprint $table) {
         
            $table->increments('PERSON_ID');
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

            $table->string('COUNTY');
            $table->string('ADDRESS');

       //     $table->foreign('idtipo_doc')->references('idtipo_doc')->on('tipo_docs');
     //       $table->foreign('idposition')->references('idposition')->on('position');

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
        Schema::drop('HR_PER_PEOPLE_inf');
    }
}

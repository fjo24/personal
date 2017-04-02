<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddPERVENTASTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PER_VENTAS', function (Blueprint $table) {
            $table->integer('employee_id')->unsigned();
            $table->date('date');
            $table->string('amount');
            $table->string('invoice_id');
            $table->string('status');
            
           // $table->foreign('employee_id')->references('PERSON_ID')->on('HR_PER_PEOPLE_inf');
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
        Schema::drop('PER_VENTAS');
    }
}

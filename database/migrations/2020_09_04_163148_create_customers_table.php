<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->string('name');
            $table->string('gender');
            $table->date('DOB');
            $table->string('NRC');
            $table->string('phone');
            $table->string('email');
            $table->string('age');
            $table->string('marital_status');
            $table->string('occupation');
            $table->string('representative');
            $table->date('start_date');
            $table->string('period');
            $table->foreignId('organisation_id');
            $table->foreign('organisation_id')->references('id')->on('organisations');
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
        Schema::dropIfExists('customers');
    }
}

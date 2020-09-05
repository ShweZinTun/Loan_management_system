<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBudgetYearsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('budget_years', function (Blueprint $table) {
            $table->id();
            $table->string('year');
            $table->float('credit');
            $table->float('debit');
            $table->float('profit');
            $table->foreignId('organisation_id');
            $table->foreign('organisation_id')->references('id')->on('organisations');
            $table->foreignId('record_id');
            $table->foreign('record_id')->references('id')->on('records');
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
        Schema::dropIfExists('budget_years');
    }
}

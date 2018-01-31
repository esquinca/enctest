<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveyVenueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey_venue', function (Blueprint $table) {
            // $table->increments('id');
            $table->integer('survey_id')->unsigned();
            $table->integer('venue_id')->unsigned();
            $table->foreign('survey_id')->references('id')->on('surveys');
            $table->foreign('venue_id')->references('id')->on('venues');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('survey_venue');
    }
}

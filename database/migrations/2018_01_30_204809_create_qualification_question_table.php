<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQualificationQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qualification_question', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('qualification_id')->unsigned();
            $table->integer('question_id')->unsigned();
            $table->integer('venue_id')->unsigned();
            $table->integer('guest_id')->unsigned();
            $table->foreign('qualification_id')->references('id')->on('qualifications');
            $table->foreign('question_id')->references('id')->on('questions');
            $table->foreign('venue_id')->references('id')->on('venues');
            $table->foreign('guest_id')->references('id')->on('guests');
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
        Schema::dropIfExists('qualification_question');
    }
}

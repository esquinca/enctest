<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserVenueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_venue', function (Blueprint $table) {
            // $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('venue_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('user_venue');
    }
}

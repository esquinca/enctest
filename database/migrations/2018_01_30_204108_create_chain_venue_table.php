<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChainVenueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chain_venue', function (Blueprint $table) {
            // $table->increments('id');
            $table->integer('chain_id')->unsigned();
            $table->integer('venue_id')->unsigned();
            $table->foreign('chain_id')->references('id')->on('chains');
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
        Schema::dropIfExists('chain_venue');
    }
}

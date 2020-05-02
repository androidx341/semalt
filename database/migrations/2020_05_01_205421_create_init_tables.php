<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInitTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->string('caption');
        });

        Schema::create('bids', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->bigInteger('id_event')->unsigned();
            $table->string('name');
            $table->string('email');
            $table->float('price');

            $table->foreign('id_event')->references('id')->on('events');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bids');
        Schema::dropIfExists('events');
    }
}

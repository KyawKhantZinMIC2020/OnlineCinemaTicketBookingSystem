<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShowTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('show_times', function (Blueprint $table) {
            $table->id();
            $table->string("showtime");
            $table->date("date");
            $table->unsignedBigInteger("movie_id");
            $table->foreign('movie_id')->references('id')->on('movies')->onDelete('cascade');
            $table->unsignedBigInteger("hall_id");
            $table->foreign('hall_id')->references('id')->on('halls')->onDelete('cascade');
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
        Schema::dropIfExists('show_times');
    }
}

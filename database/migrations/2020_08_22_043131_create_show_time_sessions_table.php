<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShowTimeSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('show_time_sessions', function (Blueprint $table) {
            $table->id();
            $table->string("session");
            $table->unsignedBigInteger("showtime_id");
            $table->foreign('showtime_id')->references('id')->on('show_times')->onDelete('cascade');
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
        Schema::dropIfExists('show_time_sessions');
    }
}

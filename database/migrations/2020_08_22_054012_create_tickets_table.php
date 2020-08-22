<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string("status");
            $table->unsignedBigInteger("seat_id");
            $table->foreign('seat_id')->references('id')->on('seats')->onDelete('cascade');
            $table->unsignedBigInteger("showtimesession_id");
            $table->foreign('showtimesession_id')->references('id')->on('show_time_sessions')->onDelete('cascade');
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
        Schema::dropIfExists('tickets');
    }
}

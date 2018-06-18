<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservedSeatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserved_seats', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('reservation_daily_service_id')->unsigned();
            $table->integer('seat_booked')->unsigned();
            $table->timestamps();
            $table->softDeletes(); //deleted at
            
            $table->foreign('reservation_daily_service_id')->references('id')->on('reservation_daily_services');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reserved_seats');
    }
}

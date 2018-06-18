<?php

use App\ReservationDailyService;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationDailyServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_daily_services', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users_id')->unsigned();
            $table->integer('vehicle_id')->unsigned();
            $table->date('journey_date');
            $table->boolean('paid')->default(ReservationDailyService::UNPAID);
            $table->timestamps();
            $table->softDeletes(); //deleted at
            
            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('vehicle_id')->references('id')->on('vehicles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation_daily_services');
    }
}

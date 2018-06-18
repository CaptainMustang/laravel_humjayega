<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->string('vehicle_no');
            $table->integer('no_of_seats')->unsigned();
            $table->string('driver_name');
            $table->string('driver_phno');
            $table->string('vehicle_img');
            $table->decimal('seat_unit_price', 7, 2);
            $table->timestamps();
            $table->softDeletes(); //deleted at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}

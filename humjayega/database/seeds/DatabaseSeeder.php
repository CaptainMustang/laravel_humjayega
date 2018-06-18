<?php

use App\Journey;
use App\ReservationDailyService;
use App\User;
use App\Vehicle;
use App\VehicleUnavailable;
use App\ReservedSeat;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
    	DB::statement('SET FOREIGN_KEY_CHECKS = 0');

    	User::truncate();
    	Vehicle::truncate();
    	Journey::truncate();
    	VehicleUnavailable::truncate();
    	ReservationDailyService::truncate();
    	ReservedSeat::truncate();


    	$userQty=30;
    	$vehicleQty=30;
    	$journeyQty=30;
    	$vehicleUnavailableQty=20;
    	$reservationDailyServiceQty=50;
    	$reservedSeatQty=100;

    	factory(User::class, $userQty)->create();
    	factory(Vehicle::class, $vehicleQty)->create();
    	factory(Journey::class, $journeyQty)->create();
    	factory(VehicleUnavailable::class, $vehicleUnavailableQty)->create();
    	factory(ReservationDailyService::class, $reservationDailyServiceQty)->create();
    	factory(ReservedSeat::class, $reservedSeatQty)->create();
    }
}

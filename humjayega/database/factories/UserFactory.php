<?php

use App\Journey;
use App\ReservationDailyService;
use App\User;
use App\Vehicle;
use App\VehicleUnavailable;
use App\ReservedSeat;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
	static $password;

	return [
		'name' => $faker->name,
		'phone' => $faker->unique()->phoneNumber,
		'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),//'$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
        'verified' => $verified = $faker->randomElement([User::VERIFIED_USER, User::UNVERIFIED_USER]),
        'verification_token' => $verified == User::VERIFIED_USER ? 0 : User::generateVerificationCode(),
        'admin' => $verified = $faker->randomElement([User::ADMIN_USER, User::REGULAR_USER]),
    ];
});

$factory->define(Vehicle::class, function (Faker $faker) {
	return [
		'type' => $faker->word,
		'vehicle_no' => $faker->unique()->numberBetween(10000, 50000),
		'no_of_seats' => $faker->numberBetween(10, 13),
		'driver_name' => $faker->name,
		'driver_phno' => $faker->phoneNumber,
		'vehicle_img' => $faker->randomElement(['1.jpg', '.jpg', '3.jpg']),
		'seat_unit_price' => $faker->numberBetween(130, 140),
	];
});

$factory->define(Journey::class, function (Faker $faker) {
	return [
		'vehicle_id' => Vehicle::all()->random()->id,
		'journey_source' => $faker->word,
		'journey_destination' => $faker->word,
		'reporting_time' => $faker->time,
		'departure_time' => $faker->time,
	];
});

$factory->define(VehicleUnavailable::class, function (Faker $faker) {
	return [
		'vehicle_id' => Vehicle::all()->random()->id,
		'vehicle_unavailable_date' => $faker->date,
	];
});

$factory->define(ReservationDailyService::class, function (Faker $faker) {
	return [
		'users_id' => User::all()->random()->id,
		'vehicle_id' => Vehicle::all()->random()->id,
		'journey_date' => $faker->date,
		'paid' => $faker->numberBetween(0, 1),
	];
});

$factory->define(ReservedSeat::class, function (Faker $faker) {
	return [
		'reservation_daily_service_id' => ReservationDailyService::all()->random()->id,
		'seat_booked' => $faker->numberBetween(1, 13),
	];
});
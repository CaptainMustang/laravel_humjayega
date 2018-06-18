<?php

namespace App;

use App\Journey;
use App\VehicleUnavailable;
use App\reservationDailyServices;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehicle extends Model
{
	use SoftDeletes;

	protected $dates = ['deleted_at'];
	
	protected $fillable = [
		'type',
		'vehicle_no',
		'no_of_seats',
		'driver_name',
		'driver_phno',
		'vehicle_img',
		'seat_unit_price',
	];

	public function journeys(){
		return $this->hasMany(Journey::class);
	}

	public function vehicleUnavailables(){
		return $this->hasMany(VehicleUnavailable::class);
	}

	public function reservationDailyServices(){
		return $this->hasMany(reservationDailyServices::class);
	}
}

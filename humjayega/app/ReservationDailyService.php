<?php

namespace App;

use App\ReservedSeat;
use App\User;
use App\Vehicle;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReservationDailyService extends Model
{
	use SoftDeletes;
	
	const PAID = '1';
	const UNPAID = '0';

	protected $dates = ['deleted_at'];

	protected $fillable = [
		'users_id',
		'vehicle_id',
		'journey_date',
		'paid',
	];

	public function isPaid(){
		return $this->paid == ReservationDailyService::PAID;
	}

	public function user(){
		return $this->belongsTo(User::class);
	}

	public function reservedSeats(){
		return $this->hasMany(ReservedSeat::class);
	}

	public function vehicle(){
		return $this->belongsTo(Vehicle::class);
	}
}

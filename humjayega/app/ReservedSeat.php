<?php

namespace App;

use App\ReservationDailyService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReservedSeat extends Model
{
	use SoftDeletes;

	protected $dates = ['deleted_at'];
	
	protected $fillable = [
		'reservation_daily_service_id',
		'seat_booked',
	];

	public function reservationDailyService(){
		return $this->belongsTo(ReservationDailyService::class);
	}
}

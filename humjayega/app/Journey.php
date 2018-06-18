<?php

namespace App;

use App\Vehicle;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Journey extends Model
{
	use SoftDeletes;

	protected $dates = ['deleted_at'];
	protected $fillable = [
		'vehicle_id',
		'journey_source',
		'journey_destination',
		'reporting_time',
		'departure_time',
	];

	public function vehicle(){
		return $this->belongsTo(Vehicle::class);
	}
}

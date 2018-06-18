<?php

namespace App;

use App\Vehicle;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VehicleUnavailable extends Model
{
	use SoftDeletes;

	protected $dates = ['deleted_at'];
	protected $fillable = [
		'vehicle_id',
		'vehicle_unavailable_date',
	];

	public function vehicle(){
		return $this->belongsTo(Vehicle::class);
	}
}

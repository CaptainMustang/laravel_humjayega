<?php

namespace App;

use App\ReservationDailyService;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

    protected $dates = ['deleted_at'];

    const VERIFIED_USER = '1';
    const UNVERIFIED_USER = '0';

    const ADMIN_USER = 'true';
    const REGULAR_USER = 'false';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'phone',
        'email',
        'password',
        'verified',
        'verification_token',
        'admin',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'verification_token',
    ];


    /*MUTATOR*/
    public function setNameAttribute($name){
        $this->attributes['name'] = strtolower($name);
    }
    /*ACCESSOR*/
    public function getNameAttribute($name){
        return ucwords($name);
    }
    //----end-----//


    public function isVerified(){
        return $this->verified == User::VERIFIED_USER;
    }
    public function isAdmin(){
        return $this->admin == User::ADMIN_USER;
    }

    public static function generateVerificationCode(){
        return str_random(40);
    }

    public function reservationDailyService(){
        return $this->hasMany(ReservationDailyService::class);
    }
}

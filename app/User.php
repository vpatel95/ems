<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function member() {
        return $this->hasOne('App\Member', 'm_id');
    }

    public function hod() {
        return $this->hasOne('App\Hod', 'h_id');
    }

    public function coordinator() {
        return $this->hasOne('App\Coordinator', 'c_id');
    }

    public function isHod() {
        if($this->role == 2)
            return true;

        return false;
    }

    public function isCoordinator() {
        if($this->role == 1)
            return true;

        return false;
    }

    public function isMember() {
        if($this->role == 0)
            return true;

        return false;
    }

}

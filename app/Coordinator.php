<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coordinator extends Model
{
	protected $primaryKey = 'c_id';

    public function event() {
    	return $this->hasMany('App\Event', 'c_id');
    }

    public function user() {
    	return $this->belongsTo('App\User', 'c_id');
    }
    
}

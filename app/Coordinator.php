<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coordinator extends Model
{
    public function event() {
    	return $this->hasMany('App\Event', 'c_id');
    }
    
}

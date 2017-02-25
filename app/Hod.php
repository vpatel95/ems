<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hod extends Model {
    
    public function user() {
    	return $this->belongsTo('App\User', 'h_id');
    }
}

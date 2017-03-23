<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hod extends Model {
    
    protected $primaryKey = 'h_id';

    public function user() {
    	return $this->belongsTo('App\User', 'h_id');
    }
}

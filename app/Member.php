<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
	protected $primaryKey = 'm_id';

    public function user() {
    	return $this->belongsTo('App\User', 'm_id');
    }
}

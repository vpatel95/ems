<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function coordinator() {
    	return $this->belongsTo('App\Coordinator', 'c_id', 'c_id');
    }
}

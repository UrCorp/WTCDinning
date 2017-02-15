<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    //
    protected $table = "reservations";

    protected $fillable = ['name','email','people','hour','date','restaurant_id'];

    public function restaurants() {
    	return $this->belongsTo('App\Restaurant');
    }
}

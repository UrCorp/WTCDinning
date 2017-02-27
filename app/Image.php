<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    protected $table = "images";

    protected $fillable = ['name', 'restaurant_id'];

    public function restaurants () {
    	return $this->belongsTo('App\Restaurant','restaurant_id');
    }
}

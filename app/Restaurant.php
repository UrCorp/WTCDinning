<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    //
    protected $table = "restaurants";

    protected $fillable = [
    	'name',
    	'adress',
    	'email',
    	'phone',
    	'link_maps',
    	'start_day',
    	'finish_day',
    	'open_hour',
    	'close_hour', 
    	'description',
        'category_id'];

    public function reservations() {
    	return $this->hasMany('App\Rereservation');
    }

    public function categories() {
        return $this->belongsTo('App\Category');
    }

    public function tags(){
        return $this->belongsToMany('App\Tag');
    }

    public function images() {
        return $this->hasMany('App\Image');
    }
}

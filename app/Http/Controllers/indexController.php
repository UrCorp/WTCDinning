<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Restaurant;
use App\Reservation;

class indexController extends Controller
{
    //
    public function index()
    {
        //
        $restaurants = Restaurant::orderBy('id','ASC')->paginate();
        return view('site.welcome')->with('restaurants',$restaurants);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
use App\Restaurant;
use App\Tag;
use App\Image;
use App\Http\Requests\RestaurantRequest;

class indexController extends Controller
{
    //
    public function index(Request $request)
    {
        /*
        $restaurants = Restaurant::search($request->search)->orderBy('name','ASC')->paginate();
        $restaurants->each(function ($restaurants) {
        	$restaurants->categoria;
            $restaurants->images;
            $restaurants->tags;
        });
        return view('site.welcome')->with('restaurants',$restaurants);
        */
        
        return view('site.welcome1');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
use App\Restaurant;
use App\Tag;
use App\Image;
use App\Http\Requests\RestaurantRequest;

class GenerealAssemblyController extends Controller
{
    //
    public function index(Request $request)
    {
        return view('site.GenerealAssembly');
    }

    
}

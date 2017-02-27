<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
use App\Restaurant;
use App\Tag;
use App\Image;
use Laracasts\Flash\Flash;
use App\Http\Requests\RestaurantRequest;

class RestaurantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        
        $restaurants = Restaurant::search($request->search)->orderBy('id','ASC')->paginate();
        $restaurants->each(function ($restaurants) {
            $restaurants->categoria;
        });
        return view('admin.restaurants.index')->with('restaurants', $restaurants);
        //dd($restaurants->all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::orderBy('name','ASC')->pluck('name','id');
        $tags = Tag::orderBy('name','ASC')->get();
        return view('admin.restaurants.create')
            ->with('categories', $categories)
            ->with('tags', $tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RestaurantRequest $request)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = 'Img_wtc' . time() . '.' . $file->getClientOriginalExtension();
            $path = public_path() . '/img/restaurants/';
            $file->move($path, $name);
        }

        $restaurant = new Restaurant($request->all());
        $restaurant->open_hour = $request->open_hour.":".$request->minute_open;
        $restaurant->close_hour = $request->close_hour.":".$request->minute_close;
        $restaurant->save();

        $restaurant->tags()->sync($request->tags);

        $image = new Image();
        $image->name = $name;
        $image->restaurant_id=$restaurant->id;
        $image->save();

        \Session::flash('flash_message','Restaurant añadido correctamente..'); //<--FLASH MESSAGE
        return redirect()->route('restaurants.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $restaurant = Restaurant::find($id);
        $restaurant->categoria;
        $categories = Category::orderBy('id', 'ASC')->pluck('name','id');
        $tags = Tag::orderBy('name','ASC')->pluck('name','id');
        $my_tags = $restaurant->tags->pluck('id')->toArray(); 


        return view('admin.restaurants.edit')
            ->with('restaurant',$restaurant)
            ->with('categories',$categories)
            ->with('tags',$tags)
            ->with('my_tags',$my_tags);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $restaurant = Restaurant::find($id); 
        $restaurant->fill($request->all());
        $restaurant->open_hour = $request->open_hour.":".$request->minute_open;
        $restaurant->close_hour = $request->close_hour.":".$request->minute_close;
        $restaurant->save();

        $restaurant->tags()->sync($request->tags);

        \Session::flash('flash_message',$restaurant->name.' actualizado correctamente.'); //<--FLASH MESSAGE
        return redirect()->route('restaurants.index');        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $restaurant = Restaurant::find($id);
        $restaurant->delete();

        \Session::flash('flash_message','Restaurant borrado correctamente.'); //<--FLASH MESSAGE
        return redirect()->route('restaurants.index');

    }
}

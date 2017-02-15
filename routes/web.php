<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [
		'uses'	=> 	'indexController@index',
		'as' 	=>	'index'
	]);

Route::group(['prefix' => 'admin'], function() {
	Route::resource('restaurants','RestaurantsController');
	Route::get('restaurants/{id}/destroy', [
			'uses'	=>	'RestaurantsController@destroy',
			'as' 	=>	'restaurants.destroy'
		]);
	Route::resource('reservations', 'ReservationsController');
	Route::resource('categories', 'CategoriesController');
	Route::get('categories/{id}/destroy', [
			'uses'	=>	'CategoriesController@destroy',
			'as' 	=>	'categories.destroy'
		]);
	Route::resource('tags', 'TagsController');
	Route::get('tags/{id}/destroy', [
			'uses'	=>	'TagsController@destroy',
			'as' 	=>	'tags.destroy'
		]);
});
Auth::routes();

Route::get('/home', 'HomeController@index');
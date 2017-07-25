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


Route::group(['as' => 'site.'], function () {

  Route::group(['as' => 'welcome.'], function () {

		Route::get('/', [
				'uses'	=> 	'indexController@index',
				'as' 	=>	'index'
			]);

		Route::get('/Home', [
				'uses'	=> 	'indexController@index',
				'as' 	=>	'index'
			]);

		Route::get('/Dining', [
				'uses' 	=> 	'indexController@dinning',
				'as'	=> 	'dinning'
			]);

		Route::get('/Lean-Six-Sigma', function () {
		    return view('site.leansixsigma');
		});


		Route::get('/Certification', function () {
		    return view('site.certification');
		});

		Route::get('/Shop', function () {
		    return view('site.shop');
		});

  });

  Route::group(['prefix' => 'es'], function() {

    Route::get('/', [
        'uses'	=> 'indexController@inicio',
        'as' 	=> 'inicio'
      ]);

    Route::get('/Inicio', [
        'uses'	=> 	'indexController@inicio',
        'as' 	=>	'es'
      ]);

    Route::get('/Lean-Six-Sigma', function () {
		    return view('site.es.leansixsigma');
		});

    Route::get('/Certification', function () {
		    return view('site.es.certification');
		});
  });

  Route::group(['prefix' => 'contact', 'as' => 'contact.'], function () {

    Route::post('/send', [
      'uses'  => 'Contact@send',
      'as'    => 'send'
    ]);

    Route::post('/save', [
      'uses'  => 'Contact@save',
      'as'    => 'save'
    ]);
  });
});



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

	Route::resource('blog', 'BlogController');

	Route::resource('tags', 'TagsController');
	Route::get('tags/{id}/destroy', [
			'uses'	=>	'TagsController@destroy',
			'as' 	=>	'tags.destroy'
		]);

	Route::get('images', [
			'uses'	=> 'ImageController@index',
			'as' 	=> 'images.index'
		]);
});

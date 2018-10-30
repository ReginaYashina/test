<?php
Route::get('/', 'BaseController@getIndex');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', 'HomeController@postIndex');
Route::get('fitback', 'FitbackController@getIndex');
Route::get('katalog/{id}', 'KatalogController@getIndex');
Route::get('categories', 'ProductController@getAll');
Route::group(['middleware'=>['authuser']],
	function(){
		Route::get('basket','BasketController@getIndex');
	});
Route::get('product/{id}', 'ProductController@getOne');
Route::get('basket/add/{id}', 'BasketController@getAdd');
Route::get('basket', 'BasketController@getAll');
Route::get('basket/dell/{id}', 'BasketController@getDell');
Route::get('basket/clear', 'BasketController@getClear');


Route::get('{url}', 'StaticController@getIndex');
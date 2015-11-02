<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index', ['items' => []]);
});

Route::get('/items/{id}', function($id) {
	return view('itemView');
});

Route::get('/login', function() {
	return view('login');
});

Route::get('/addItem', function() {
	return view('addItemView');
});

Route::get('/updateItem', function() {
	return view('updateItemView');
});

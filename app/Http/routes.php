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

Route::get('/', function(){
	echo "hello there";
});

Route::get('hello/{name}',function($name){
	echo "Hello Route: ".$name;
});

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('test',function(){
	echo '
	<form action="test" method = "post">
	<input type="submit" value="submit">
	<input type="hidden" name="_token" value="'.csrf_token().'">
	<input type="hidden" name="_method" value="PUT">
	</form>'
	;
});
Route::post('test',function(){
	echo "post";
});

Route::put('test',function(){
	echo "PUT";
});

Route::delete('test',function(){
	echo "delete";
});
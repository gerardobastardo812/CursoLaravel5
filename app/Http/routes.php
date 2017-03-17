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

Route::get('/','FrontController@index');
Route::get('contacto','FrontController@contacto');
Route::get('reviews','FrontController@reviews');
Route::get('admin','FrontController@admin');

Route::get('password/email','Auth\PasswordController@getEmail');
Route::post('password/email','Auth\PasswordController@postEmail');

Route::get('password/reset/{token}','Auth\PasswordController@getReset');
Route::post('password/reset/','Auth\PasswordController@postReset');




Route::resource('mail','MailController');
Route::resource('usuario','UsuarioController');
Route::resource('genero','GeneroController');
Route::resource('pelicula','MovieController');
Route::get('generos','GeneroController@listing');

Route::resource('log','LogController');
Route::get('logout','LogController@logout');

/*
Route::get('controlador','PruebaController@index');
Route::get('name/{nombre}','PruebaController@nombre');
Route::resource('movie','MovieController');

Route::get('prueba',function(){
	return "Hola desde routes.php";

});


Route::get('nombre/{nombre}',function($nombre){

	return "mi nombre es: ".$nombre;

});

Route::get('edad2/{edad?}',function($edad = 20){

	return "mi edad es: ".$edad;

});


Route::get('edad/{edad}',function($edad){

	return "mi edad es: ".$edad;

});

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
*/
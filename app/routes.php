<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', "HomeController@home");
Route::get("tipo_de_alimentos/ingresar", "TipoDeAlimentosController@create");
Route::resource("tipo_de_alimentos", "TipoDeAlimentosController");
Route::get('encuesta_bares', "EncuestasController@create");
Route::get('encuesta_consumo_alimentos', "EncuestasController@consumoAlimentos");
Route::post('encuesta_consumo_alimentos', "EncuestasController@createConsumoAlimentos");
Route::get('/registrar', "UsersController@create");
Route::get('/login', "SessionsController@create");
Route::get('/logout', "SessionsController@logout");
Route::get('users/register', "UsersController@create");
Route::resource("sessions", 'SessionsController');
Route::resource("users", 'UsersController');
Route::get('/profile', 'UsersController@profile');

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

Route::get("alimentos", "AlimentosController@index");
Route::post("alimentos", "AlimentosController@store");
Route::resource("alimentos", "AlimentosController");

Route::get('encuesta_consumo_alimentos', "EncuestasController@consumoAlimentos");
Route::post('encuesta_consumo_alimentos', "EncuestasController@createConsumoAlimentos");

Route::get('antropometria', "AntropometriasController@main");
Route::post('antropometria', "AntropometriasController@buscarEstudiantes");
Route::get('antropometria/datos/{id}', "AntropometriasController@ingresarDatos");
Route::post('antropometria.ingresar', "AntropometriasController@create");

Route::get('bioquimica', "BioquimicaController@main");
Route::post('bioquimica', "BioquimicaController@buscarEstudiantes");
Route::get('bioquimica/datos/{id}', "BioquimicaController@ingresarDatos");
Route::post('bioquimica.ingresar', "BioquimicaController@create");


Route::get('/registrar', "UsersController@create");
Route::get('/login', "SessionsController@create");
Route::get('/logout', "SessionsController@logout");
Route::get('users/register', "UsersController@create");
Route::resource("sessions", 'SessionsController');
Route::resource("users", 'UsersController');
Route::get('/profile', 'UsersController@profile');
Route::get('/edit', 'UsersController@editProfile');
Route::post('edit', 'UsersController@edit');

Route::get('encuesta_consumo_alimentos_bares', "EncuestasController@consumoAlimentosBares");
Route::post('encuesta_consumo_alimentos_bares', "EncuestasController@createConsumoAlimentosBares");

Route::get('encuesta_consumo_habitual', "EncuestasController@consumoHabitual");
Route::get('/obtener_alumno_randomicamente', "EncuestasController@obtener_alumno_randomicamente");
Route::post('/grabar_consumo_habitual', "EncuestasController@grabar_consumo_habitual");

Route::get('encuesta_manipulacion_comedores', "EncuestasController@manipulacionComedores");
Route::post('encuesta_manipulacion_comedores', "EncuestasController@createManipulacionComedores");

Route::get('encuesta_manipulacion_bares', "EncuestasController@manipulacionBares");
Route::post('encuesta_manipulacion_bares', "EncuestasController@createManipulacionBares");

Route::get('encuesta_control_higiene_personal', "EncuestasController@controlHigienePersonal");
Route::post('encuesta_control_higiene_personal', "EncuestasController@createControlHigienePersonal");

Route::get('/obtener_alimentos', "AlimentosController@obtener_alimentos");




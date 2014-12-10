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
Route::get('alimentos/delete/{id}','AlimentosController@delete');

Route::get("alimentosBares", "AlimentosBaresController@index");
Route::post("alimentosBares", "AlimentosBaresController@store");
Route::resource("alimentosBares", "AlimentosBaresController");
Route::get('alimentosBares/delete/{id}','AlimentosBaresController@delete');

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


Route::get('usuarios', "UsersController@index");
Route::get('registro', "UsersController@create");
Route::get('/login', "SessionsController@create");
Route::get('/logout', "SessionsController@logout");
Route::get('users/register', "UsersController@create");
Route::resource("sessions", 'SessionsController');
Route::resource("users", 'UsersController');
Route::get('/profile', 'UsersController@profile');
Route::get('/edit', 'UsersController@editProfile');
Route::post('edit', 'UsersController@edit');
Route::post('disclaimer', 'UsersController@aceptoDisclaimer');
Route::get('usuarios/delete/{id}','UsersController@delete');


Route::get('encuesta_consumo_alimentos_bares', "EncuestasController@consumoAlimentosBares");
Route::post('encuesta_consumo_alimentos_bares', "EncuestasController@createConsumoAlimentosBares");

Route::get('encuestas_consumo_habitual', "ConsumoHabitualController@index");
Route::get('encuesta_consumo_habitual', "EncuestasController@consumoHabitual");
Route::get('/obtener_alumno_randomicamente', "EncuestasController@obtener_alumno_randomicamente");
Route::post('/grabar_consumo_habitual', "EncuestasController@grabar_consumo_habitual");

// Route::get('encuesta_manipulacion_bares', "EncuestasController@manipulacionBares");
// Route::post('encuesta_manipulacion_bares', "EncuestasController@createManipulacionBares");

//Crear empresas - Control de higiene del personal de bares y comedores de la PUCE
Route::get('/encuesta_control_higiene_personal/empresas', "EmpresasController@indexEmpresasHigienePersonal");
Route::get('/encuesta_control_higiene_personal/empresas/{id}', array('uses'=>'EmpresasController@informacionEmpresa'));
Route::get('/encuesta_control_higiene_personal/empresas/{id}/editar', 'EmpresasController@editarEmpresa');
Route::post('/encuesta_control_higiene_personal/empresas/{id}/guardar_empresa', 'EmpresasController@guardarEmpresa');
Route::get('/encuesta_control_higiene_personal/empleados/{id}/editar', 'EmpleadosController@editarEmpleado');
Route::get('/encuesta_control_higiene_personal/ver_empleados/{id}', array('uses'=>'EmpresasController@informacionEmpleados'));
Route::get('/encuesta_control_higiene_personal/nueva_empresa', "EmpresasController@nuevaEmpresa");
Route::post('encuesta_control_higiene_personal/crear_empresa', "EmpresasController@crearEmpresa");

Route::get('/encuesta_manipulacion_comedores/nueva_empresa', "EmpresasController@nuevaEmpresaCMAHC");
Route::post('encuesta_manipulacion_comedores/crear_empresa', "EncuestasController@createManipulacionComedores");
//Fin de Crear empresas

//
//Crear encuesta Control Higiene del Personal de bares y comedores de la PUCE
//
Route::get('/encuesta_control_higiene_personal/nueva_encuesta', "EncuestasController@nuevaEncuestaControlHigienePersonal");
Route::post('/encuesta_control_higiene_personal/crear_encuesta', "EncuestasController@crearEncuestaControlHigienePersonal");
//
//Fin encuesta Control Higiene del Personal de bares y comedores de la PUCE
//
Route::get('/encuesta_manipulacion_comedores/empresas', "EmpresasController@indexEncuestasManipulacionComedores");
Route::get('/encuesta_manipulacion_comedores/empresas/{id}/editar', 'EmpresasController@editarEmpresa');
Route::post('/encuesta_manipulacion_comedores/empresas/{id}/guardar_empresa', 'EmpresasController@guardarEmpresa');
Route::get('/encuesta_manipulacion_comedores/empresas/{id}', 'EmpresasController@informacionEmpresa');
Route::get('/encuesta_manipulacion_comedores/nueva_encuesta', "EncuestasController@nuevaEncuestaManipulacionComedores");
Route::post('/encuesta_manipulacion_comedores/guardar_informacion', "EncuestasController@nuevaEncuestaManipulacionComedoresGuardarInformacion");
Route::get('/encuesta_manipulacion_comedores/empresas/{id}/editar_encuesta', "EncuestasController@editarEncuestaManipulacionComedores");
//
//Control de manipulación de alimentos e higiene de los bares de la PUCE
//
Route::get('/encuestas_manipulacion_bares/empresas', "EmpresasController@indexEncuestasManipulacionBares");
Route::get('/encuesta_manipulacion_bares/empresas/{id}/editar', 'EmpresasController@editarEmpresa');
Route::post('/encuestas_manipulacion_bares/empresas/{id}/guardar_empresa', 'EmpresasController@guardarEmpresa');
Route::get('/encuesta_manipulacion_bares/empresas/{id}', 'EmpresasController@informacionEmpresa');
Route::get('/encuesta_manipulacion_bares/nueva_empresa', "EmpresasController@nuevaEmpresaCMAHB");
Route::get('/encuesta_manipulacion_bares/nueva_encuesta', "EncuestasController@nuevaEncuestaManipulacionBares");
Route::post('/encuesta_manipulacion_bares/guardar_informacion', "EncuestasController@nuevaEncuestaManipulacionBaresGuardarInformacion");
Route::get('/encuesta_manipulacion_bares/empresas/{id}/editar_encuesta', "EncuestasController@editarEncuestaManipulacionBares");

//
//
/*REPORTES*/
Route::get('reportes/antropometria', "ReportesController@reporteAntropometria");
Route::get('reportes/antropometria/{id}', "ReportesController@reporteAntropometriaEstudiante");
Route::get('reportes/bioquimica', "ReportesController@reporteBioquimica");
Route::get('reportes/bioquimica/{id}', "ReportesController@reporteBioquimicaEstudiante");
Route::get('reportes/consumo_alimentos', "ReportesController@reporteConsumoAlimentos");
Route::get('reportes/consumo_alimentos/{id}', "ReportesController@reporteConsumoAlimentosEstudiante");
Route::get('reportes/consumo_alimentos_bares', "ReportesController@reporteConsumoAlimentosBares");
Route::get('reportes/consumo_alimentos_bares/{id}', "ReportesController@reporteConsumoAlimentosBaresEstudiante");
Route::get('reportes/calcular_datos_universidad/{id}', "ReportesController@calcularDatosEncuestaAlimentosUniversidadEstudiante");
Route::get('reportes/calcular_datos_bares/{id}', "ReportesController@calcularDatosEncuestaAlimentosBaresEstudiante");
Route::get('reportes/consumo_habitual', "ReportesController@reporteConsumoHabitual");
Route::get('reportes/consumo_habitual/{id}', "ReportesController@reporteConsumoHabitualEstudiante");
/**/

Route::get('/obtener_alimentos', "AlimentosController@obtener_alimentos");
Route::get('search/autocomplete', 'UsersController@autocomplete');

Route::get('/empresas/{id}/eliminar', "EmpresasController@eliminarEmpresa");
Route::get('/encuesta_control_higiene_personal/empleados/{id}/eliminar', "EmpleadosController@eliminarEmpleado");
Route::get('/consumo_habitual/{id}/eliminar', "ConsumoHabitualController@eliminar");



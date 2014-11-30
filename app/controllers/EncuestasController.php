<?php

class EncuestasController extends BaseController {

	function __construct() {
        $this->beforeFilter('auth');
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('encuestas.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	
	//Frecuencia de consumo de alimentos en la Universidad y alrededores
	public function consumoAlimentos()
	{
		$encuestas_completas = 0;
		if(isset(Input::all()['estudiante_id']))
			$estudiante_id = Input::all()['estudiante_id'];
		else
			$estudiante_id = null;
		$user = EncuestasController::setUsuario($estudiante_id);
		$bloquear_encuestas = "";
		if($user->encuestaAlimentosUniversidad->count() == TipoDeAlimento::get_total_alimentos()){
			$encuestas_completas = 1;
		}
		if(Auth::user()->perfilUsuario->nombre == "Estudiante" && $encuestas_completas == 1)
			$bloquear_encuestas = "disabled";
		$tipos_de_alimentos = TipoDeAlimento::orderBy('nombre')->get();
		return View::make('encuestas.consumoAlimentos', array('tipos_de_alimentos' => $tipos_de_alimentos,
						'encuestas_completas' => $encuestas_completas, 'bloquear_encuestas' => $bloquear_encuestas, 'user' => $user));				
	}

	public function setUsuario($estudiante_id){
		if((isset($estudiante_id)) && Auth::user()->esAdmin())
			$user = User::find(Input::all()['estudiante_id']);
		else
			$user = Auth::user();
		return $user;
	}

	public function consumoAlimentosBares()
	{
		$encuestas_completas = 0;
		if(isset(Input::all()['estudiante_id']))
			$estudiante_id = Input::all()['estudiante_id'];
		else
			$estudiante_id = null;
		$user = EncuestasController::setUsuario($estudiante_id);
		$bloquear_encuestas = "";
		if($user->encuestaAlimentosBares->count() == TipoDeAlimentoBares::get_total_alimentos_bares()){
			$encuestas_completas = 1;
		}

		if(Auth::user()->perfilUsuario->nombre == "Estudiante" && $encuestas_completas == 1)
			$bloquear_encuestas = "disabled";
		$tipos_de_alimentos_bares = TipoDeAlimentoBares::orderBy('nombre')->get();
        return View::make('encuestas.consumoAlimentosBares', array('tipos_de_alimentos_bares' => $tipos_de_alimentos_bares, 
        					'encuestas_completas' => $encuestas_completas, 'bloquear_encuestas' => $bloquear_encuestas,
        					'user' => $user));		
	}

	public function consumoHabitual()
	{
		if(isset(Input::all()['estudiante_id']))
			$estudiante_id = Input::all()['estudiante_id'];
		else
			$estudiante_id = null;
		$user = EncuestasController::setUsuario($estudiante_id);
		if($user->tiene_consumo_habitual == true){
			$desayuno = ConsumoHabitualDeAlimento::where("usuario_id", "=", $user->id)
													->where("tiempo_de_comida", "=", "desayuno")->take(1)->get();
			$media_manana = ConsumoHabitualDeAlimento::where("usuario_id", "=", $user->id)
													->where("tiempo_de_comida", "=", "media_manana")->take(1)->get();
			$almuerzo = ConsumoHabitualDeAlimento::where("usuario_id", "=", $user->id)
													->where("tiempo_de_comida", "=", "almuerzo")->take(1)->get();
			$media_tarde = ConsumoHabitualDeAlimento::where("usuario_id", "=", $user->id)
													->where("tiempo_de_comida", "=", "media_tarde")->take(1)->get();
 			$merienda = ConsumoHabitualDeAlimento::where("usuario_id", "=", $user->id)
													->where("tiempo_de_comida", "=", "merienda")->take(1)->get();
			// if($desayuno->isEmpty()){
			// 	return "asdasd";
			// }else
			// 	return $desayuno;
			return View::make('encuestas.editarConsumoHabitual', array('usuario' => $user,
																		'desayuno' => $desayuno,
																		'media_manana' => $media_manana,
																		'almuerzo' => $almuerzo,
																		'media_tarde' => $media_tarde,
																		'merienda' => $merienda));
		}else{
			return View::make('encuestas.consumoHabitual');
		}
	}

	public function manipulacionComedores()
	{
		return View::make('encuestas.manipulacionComedores');
	}

	public function manipulacionBares()
	{
		return View::make('encuestas.manipulacionBares');
	}

	public function createManipulacionBares()
	{
		$campos = Input::all();
		if($campos['encuesta']==1)
			return View::make('encuestas.emb_manipulacion_alimentos');
		if($campos['encuesta']==2)
			return View::make('encuestas.emb_productos_alimenticios');
		if($campos['encuesta']==3)
			return View::make('encuestas.emb_control_plagas');
		if($campos['encuesta']==4)
			return View::make('encuestas.emb_area_bar');
		if($campos['encuesta']==5)
			return View::make('encuestas.emb_area_comedor');		
		if($campos['encuesta']==6)
			return View::make('encuestas.emb_area_almacenaje_materiales_limpieza');
		if($campos['encuesta']==7)
			//return View::make('encuestas.manipulacionBares')->with('success', 'Encuesta creada satisfactoriamente');
			return Redirect::to('encuesta_manipulacion_bares')->with('success', 'Encuesta creada satisfactoriamente');
	}

	public function controlHigienePersonal()
	{
		return View::make('encuestas.controlHigienePersonal');
	}

	public function createControlHigienePersonal()
	{
		$campos = Input::all();
		if($campos['encuesta']==1)
			return View::make('encuestas.echp_empleado');
		if($campos['encuesta']==2)
			return Redirect::to('encuesta_control_higiene_personal')->with('success', 'Encuesta creada satisfactoriamente');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        return View::make('encuestas.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        return View::make('encuestas.edit');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


	//Frecuencia de consumo de alimentos en la Universidad y alrededores
	public function createConsumoAlimentos()
	{

		if(isset(Input::all()['estudiante_id']))
			$estudiante_id = Input::all()['estudiante_id'];
		else
			$estudiante_id = null;
		$user = EncuestasController::setUsuario($estudiante_id);
		$encuestas_completas = 0;
		$campos = Input::all();
		$contador_encuesta = 0;
		if(($user->encuestaAlimentosUniversidad->count() != TipoDeAlimento::get_total_alimentos()) || Auth::user()->esAdmin()){
			for($i = 1; $i <= TipoDeAlimento::get_total_alimentos(); $i++){
				if(isset($campos['frecuencia'][$i])){
					$encuesta = EncuestaAlimentosUniversidad::where("usuario_id", "=", $user->id)->where("alimento_id", "=", $campos['frecuencia']['alimento'][$i])->first();
					//Reviso si es que ya existe un dato guardado para el usuario para decidir si se va a editar o a crear nuevo.
					if(!isset($encuesta)){
						$encuesta = new EncuestaAlimentosUniversidad;	
					}
					$encuesta->alimento_id = $campos['frecuencia']['alimento'][$i];
					$encuesta->frecuencia = $campos['frecuencia'][$i];
					$encuesta->usuario_id = $user->id;
					$encuesta->num_porciones = $campos['frecuencia']['porciones'][$i];
					$encuesta->save();
					$contador_encuesta++;
				}
			}
		}else{
			$encuestas_completas = 1;
		}
		if($contador_encuesta == TipoDeAlimento::get_total_alimentos()){
			$encuestas_completas = 1;
		}
		$bloquear_encuestas = "";
		if($user->encuestaAlimentosUniversidad->count() == TipoDeAlimento::get_total_alimentos()){
			$encuestas_completas = 1;
		}

		if(Auth::user()->perfilUsuario->nombre == "Estudiante" && $encuestas_completas == 1)
			$bloquear_encuestas = "disabled";

		if (isset($_SERVER['HTTP_X_REQUESTED_WITH'])
				     AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
							 if($encuestas_completas == 1){
							 	return "Encuesta completa";
							 }
   				 }else{

   				 		if($encuestas_completas == 0){
   				 			$mensaje = "Borrador grabado exitosamente!";
   				 		}else{
   				 			$mensaje = "Encuestas Completas!!";
   				 		}
						$tipos_de_alimentos = TipoDeAlimento::orderBy('nombre')->get();
						return View::make('encuestas.consumoAlimentos', array('tipos_de_alimentos' => $tipos_de_alimentos, 
																			'message' => $mensaje,
																			'encuestas_completas' => $encuestas_completas,
																			'bloquear_encuestas' => $bloquear_encuestas,
																			'user' => $user));
				}
	}

	//*****************************************************************
	//Funcion que crea Consumo Alimentos Bares
	//Esta funcion se maneja medianta $.post desde app.js
	//Hace un submit refrescando la pantalla cuando $contador_encuesta 
	//es igual al tipo de alimentos
	//*****************************************************************
	public function createConsumoAlimentosBares()
	{
		if(isset(Input::all()['estudiante_id']))
			$estudiante_id = Input::all()['estudiante_id'];
		else
			$estudiante_id = null;
		$user = EncuestasController::setUsuario($estudiante_id);
		$encuestas_completas = 0;
		$campos = Input::all();
		$contador_encuesta = 0;
		if(($user->encuestaAlimentosBares->count() != TipoDeAlimentoBares::get_total_alimentos_bares()) || Auth::user()->esAdmin()){
			for($i = 1; $i <= TipoDeAlimentoBares::get_total_alimentos_bares(); $i++){
				if(isset($campos['frecuencia'][$i])){
					$encuesta = EncuestaAlimentosBares::where("usuario_id", "=", $user->id)->where("alimento_bares_id", "=", $campos['frecuencia']['alimento'][$i])->first();
					//Reviso si es que ya existe un dato guardado para el usuario para decidir si se va a editar o a crear nuevo.
					if(!isset($encuesta)){
						$encuesta = new EncuestaAlimentosBares;	
					}
					$encuesta->alimento_bares_id = $campos['frecuencia']['alimento'][$i];
					$encuesta->frecuencia = $campos['frecuencia'][$i];
					$encuesta->usuario_id = $user->id;
					$encuesta->num_porciones = $campos['frecuencia']['porciones'][$i];
					$encuesta->save();
					$contador_encuesta++;
				}
			}
		}else{
			$encuestas_completas = 1;
		}
		if($contador_encuesta == TipoDeAlimentoBares::get_total_alimentos_bares()){
			$encuestas_completas = 1;
		}
		$bloquear_encuestas = "";
		if($user->encuestaAlimentosBares->count() == TipoDeAlimentoBares::get_total_alimentos_bares()){
			$encuestas_completas = 1;
		}

		if(Auth::user()->perfilUsuario->nombre == "Estudiante" && $encuestas_completas == 1)
			$bloquear_encuestas = "disabled";
		if (isset($_SERVER['HTTP_X_REQUESTED_WITH'])
				     AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
							 if($encuestas_completas == 1){
							 	return "Encuesta completa";
							 }
   				 }else{	
   				 		if($encuestas_completas == 0){
   				 			$mensaje = "Borrador grabado exitosamente!";
   				 		}else{
   				 			$mensaje = "Encuestas Completas!!";
   				 		}
   				 		$tipo_de_alimento_bares = TipoDeAlimentoBares::orderBy('nombre')->get();
						return View::make('encuestas.consumoAlimentosBares', array('tipos_de_alimentos_bares' => $tipo_de_alimento_bares, 
																					'message' => $mensaje, 
																					'encuestas_completas' => $encuestas_completas,
																					'bloquear_encuestas' => $bloquear_encuestas,
																					'user' => $user));
		}
	}


	public function obtener_alumno_randomicamente()
	{
		return User::obtenerEstudianteRandomicamente()->first();

	}

	public function grabar_consumo_habitual()
	{
		$tiempos = ["desayuno", "media_manana", "almuerzo", "media_tarde", "merienda"];
		$campos = Input::all();
		if(isset($campos['no_aplica_desayuno']) && $campos['no_aplica_desayuno'] == 1)
			unset($tiempos[0]);
		if(isset($campos['no_aplica_media_manana']) && $campos['no_aplica_media_manana'] == 1)
			unset($tiempos[1]);
		if(isset($campos['no_aplica_almuerzo']) && $campos['no_aplica_almuerzo'] == 1)
			unset($tiempos[2]);
		if(isset($campos['no_aplica_media_tarde']) && $campos['no_aplica_media_tarde'] == 1)
			unset($tiempos[3]);
		if(isset($campos['no_aplica_merienda']) && $campos['no_aplica_merienda'] == 1)
			unset($tiempos[4]);
		$user = User::find($campos['alumno_id']);
		if($user->tiene_consumo_habitual <> true){
			foreach($tiempos as $tiempo){ 
				$consumo_habitual = new ConsumoHabitualDeAlimento;
				$consumo_habitual->usuario_id = $campos['alumno_id'];
				$consumo_habitual->ingresado_por_usuario = Auth::user()->id;
				$consumo_habitual->tiempo_de_comida	= $tiempo;
				$consumo_habitual->horario = $campos['horario_'.$tiempo];
				$consumo_habitual->lugar = $campos['lugar_'.$tiempo];
				$consumo_habitual->gasto_diario = $campos['gasto_diario_'.$tiempo];
				$consumo_habitual->save();
				for($i = 1; $i < $campos['numero_de_preparaciones_'.$tiempo] + 1; $i++ ){
					if(isset($campos['nombre_alimento_'.$tiempo.'_'.$i]) && $campos['nombre_alimento_'.$tiempo.'_'.$i] <> ""){
						$preparacion_consumo_habitual = new PreparacionConsumoHabitualDeAlimento;
						$preparacion_consumo_habitual->consumo_habitual_de_alimentos_id = $consumo_habitual->id;
						$preparacion_consumo_habitual->nombre_alimento = $campos['nombre_alimento_'.$tiempo.'_'.$i];
						$preparacion_consumo_habitual->forma_de_coccion = $campos['forma_de_coccion_'.$tiempo.'_'.$i];
						$preparacion_consumo_habitual->save();
						foreach($campos['ingredientes_'.$tiempo.'_'.$i] as $key => $ingrediente){
							
							if(isset($ingrediente) && $ingrediente <> ""){
								$ingrediente_preparacion = new IngredientesPreparacionConsumoHabitualDeAlimento;
								$ingrediente_preparacion->preparacion_consumo_habitual_de_alimentos_id = $preparacion_consumo_habitual->id;
								$ingrediente_preparacion->ingrediente = $ingrediente;
								$ingrediente_preparacion->cantidad_en_medidas_caseras = $campos['cantidad_'.$tiempo.'_'.$i][$key];
								$ingrediente_preparacion->numero_de_porciones = $campos['porciones_'.$tiempo.'_'.$i][$key];
								$ingrediente_preparacion->grupo_de_alimentos = $campos['grupo_alimento_'.$tiempo.'_'.$i][$key];
								$ingrediente_preparacion->save();
							}
							
						}
						// return $preparacion_consumo_habitual_desayuno;
					}
				}
			}
			$user->tiene_consumo_habitual = true;
			$user->save();
		} else{
			return View::make('encuestas.consumoHabitual', array('message' => "Alumno ya tiene información."));	
		}
		return Redirect::to('/encuesta_consumo_habitual')->with('message', "Consumo habitual grabado exitosamente");
	}


	public function nuevaEncuestaControlHigienePersonal()
	{
		$empresa = Empresa::find(Input::get('empresa_id'));
		$etiquetas = Etiqueta::getEtiquetasPorPosicion(0)->get();
		$empleado = new Empleado;
		return View::make('encuestas.nueva_encuesta_control_higiene_personal', array('empresa' => $empresa, 
																					'etiquetas' => $etiquetas,
																					'empleado' => $empleado));
	}

	//Control de higiene del personal de bares y comedores de la PUCE 
	public function crearEncuestaControlHigienePersonal()
	{
		$campos = Input::all();
		$validator = Validator::make($campos['empleado'], Empleado::$rules);
			if ($validator->passes()) {
				if(isset($campos['empleado_id'])){
					$empleado = Empleado::find($campos['empleado_id']);
				} else{
					$empleado = new Empleado;
				}
				$empleado->empresa_id = $campos['empleado']['empresa_id'];
				$empleado->nombre = $campos['empleado']['nombre'];
				$empleado->cargo = $campos['empleado']['cargo'];
				$empleado->save();
				foreach(Etiqueta::getEtiquetasPorPosicion(0)->get() as $etiqueta){
					if(isset($campos['encuesta_control_higiene_personal'][$etiqueta->id])){
						$encuesta_control_higiene_personal = EncuestaControlHigiene::where("etiqueta_id", "=", $etiqueta->id)
																				->where("empleado_id", "=", $empleado->id)->get()->first();
						if(!isset($encuesta_control_higiene_personal)){
							$encuesta_control_higiene_personal = new EncuestaControlHigiene;	
							$encuesta_control_higiene_personal->empleado_id = $empleado->id;
							$encuesta_control_higiene_personal->etiqueta_id = $etiqueta->id;
						}
						
						
						$encuesta_control_higiene_personal->cumple = $campos['encuesta_control_higiene_personal'][$etiqueta->id];
						$encuesta_control_higiene_personal->save();
					}
				}
				if($empleado->encuestasControlHigienePersonal()->get()->count() == Etiqueta::getEtiquetasPorPosicion(0)->get()->count())
					return Response::json(array(
			    		'error' => false
				    	)
			    	);
				else {
					$mensajes = '{"nombre":["Por favor llene todos los campos."]}';
			    	return Response::json(array(
			    		'mensajes' => $mensajes, 
				    	'error' => true
				    	)
			    	);
				}
			    
			} else {
			    return Response::json(array(
			    	'mensajes' => $validator->messages()->toJson(), 
			    	'error' => true
			    	)
			    );
			}
	}

	//Control de manipulación de alimentos e higiene de los comedores de la PUCE
	public function nuevaEncuestaManipulacionComedores()
	{
		$empresa = Empresa::find(Input::get('empresa_id'));
		$opciones = array("Manipulación de Alimentos", "Productos Alimenticios", "Control de Plagas", "Area de Cocina",
							  "Area de Comedor", "Area de Bodega de Alimentos", "Area de Vestidor", "Area de Almacenaje de Materiales de Limpieza");
		return View::make('encuestas.nueva_encuesta_manipulacion_alimentos_higiene_comedores', array('empresa' => $empresa, 'opciones' => $opciones));
	}


	public function nuevaEncuestaManipulacionComedoresGuardarInformacion(){
		$empresa = Empresa::find(Input::get('empresa_id'));
		$campos = Input::all();
		
		//Manipulacion de alimentos
		EncuestasController::manipulacion_alimentos($campos['encuestas_manipulacion_alimentos'], $empresa, 1);
		EncuestasController::productos_alimenticios($campos['encuestas_productos_alimenticios'], $empresa, 2);
		EncuestasController::control_de_plagas($campos['control_de_plagas'], $empresa, 3);
		//AREAS
		EncuestasController::creacion_de_area($campos['area_cocina'], $empresa, 'encuesta_manipulacion_comedor', Config::get('constants.CODIGOS_AREAS.0'), 4);
		EncuestasController::creacion_de_area($campos['area_comedor'], $empresa, 'encuesta_manipulacion_comedor', Config::get('constants.CODIGOS_AREAS.1'), 6);
		EncuestasController::creacion_de_area($campos['area_bodega_alimentos'], $empresa, 'encuesta_manipulacion_comedor', Config::get('constants.CODIGOS_AREAS.2'), 8);
		EncuestasController::creacion_de_area($campos['area_vestidor'], $empresa, 'encuesta_manipulacion_comedor', Config::get('constants.CODIGOS_AREAS.3'), 10);
		EncuestasController::creacion_de_area($campos['area_materiales_limpieza'], $empresa, 'encuesta_manipulacion_comedor', Config::get('constants.CODIGOS_AREAS.4'), 12);

		return Redirect::to('/encuesta_manipulacion_comedores/nueva_empresa');
	}

	//Control de manipulación de alimentos e higiene de los comedores de la PUCE 
	//Manipulacion de alimentos
	public function manipulacion_alimentos($manipulacion_alimentos_campos, $empresa, $index){
		if($empresa->encuestaManipulacionAlimentos()->get()->count() == 0){
			foreach(Etiqueta::getEtiquetasPorPosicion($index)->get() as $etiqueta){
				$emc_alimentos = new EncuestaManipulacionAlimento;
				$emc_alimentos->etiqueta_id = $etiqueta->id;
				$emc_alimentos->empresa_id = $empresa->id;
				if(isset($manipulacion_alimentos_campos['no_hay_termometro'][$etiqueta->id]) && ($manipulacion_alimentos_campos['no_hay_termometro'][$etiqueta->id] == "1")){
					$emc_alimentos->no_hay_termometro = $manipulacion_alimentos_campos['no_hay_termometro'][$etiqueta->id];
				}else{
					$emc_alimentos->cumple = $manipulacion_alimentos_campos['cumple'][$etiqueta->id];	
				}
				$emc_alimentos->save();
			}
		}
	}

	
	//Control de manipulación de alimentos e higiene de los comedores de la PUCE 
	//Productos Alimenticios
	public function productos_alimenticios($productos_alimenticios_campos, $empresa, $index){

		if($empresa->encuestaManipulacionProductosAlimenticios()->get()->count() == 0){
			foreach(Etiqueta::getEtiquetasPorPosicion($index)->get() as $etiqueta){
				$emc_producto_alimenticio = new EncuestaManipulacionProductosAlimenticio;
				$emc_producto_alimenticio->etiqueta_id = $etiqueta->id;
				$emc_producto_alimenticio->empresa_id = $empresa->id;
				if(isset($productos_alimenticios_campos['no_aplica'][$etiqueta->id]) && ($productos_alimenticios_campos['no_aplica'][$etiqueta->id] == "1")){
					$emc_producto_alimenticio->no_aplica = 1;
				}else{
					$emc_producto_alimenticio->lugar_adquirido = $productos_alimenticios_campos['lugar_adquirido'][$etiqueta->id];	
					$emc_producto_alimenticio->registro_sanitario = $productos_alimenticios_campos['registro_sanitario'][$etiqueta->id];	
					if($productos_alimenticios_campos['fecha_de_caducidad'][$etiqueta->id] != "")
						$emc_producto_alimenticio->fecha_de_caducidad = $productos_alimenticios_campos['fecha_de_caducidad'][$etiqueta->id];	
					$emc_producto_alimenticio->sello_de_control = $productos_alimenticios_campos['sello_de_control'][$etiqueta->id];	
				}
				$emc_producto_alimenticio->save();
			}
		}
	}

	//Control de manipulación de alimentos e higiene de los comedores de la PUCE 
	//Control de Plagas
	public function control_de_plagas($control_de_plagas_campos, $empresa, $index){
		if($empresa->encuestaManipulacionControlDePlagas()->get()->count() == 0){
			foreach(Etiqueta::getEtiquetasPorPosicion($index)->get() as $etiqueta){
				$emc_control_de_plagas = new EncuestaManipulacionControlPlaga;
				$emc_control_de_plagas->etiqueta_id = $etiqueta->id;
				$emc_control_de_plagas->empresa_id = $empresa->id;
				if(isset($control_de_plagas_campos['no_aplica'][$etiqueta->id]) && ($control_de_plagas_campos['no_aplica'][$etiqueta->id] == "1")){
					$emc_control_de_plagas->no_aplica = $control_de_plagas_campos['no_aplica'][$etiqueta->id];
				}else{
					$emc_control_de_plagas->frecuencia = $control_de_plagas_campos['frecuencia'][$etiqueta->id];	
					$emc_control_de_plagas->fecha_ultima_aplicacion = $control_de_plagas_campos['fecha_ultima_aplicacion'][$etiqueta->id];	
					$emc_control_de_plagas->fecha_a_aplicarse = $control_de_plagas_campos['fecha_a_aplicarse'][$etiqueta->id];	
					$emc_control_de_plagas->cumple = $control_de_plagas_campos['cumple'][$etiqueta->id];	
				}
				$emc_control_de_plagas->save();
			}
		}
	}


	//Control de manipulación de alimentos e higiene de los comedores de la PUCE 
	//Creacion de Areas
	public function creacion_de_area($area_campos, $empresa, $codigo_encuesta, $codigo_area, $index){
		if($empresa->encuestaManipulacionArea($codigo_area)->get()->count() == 0){
			foreach(Etiqueta::getEtiquetasPorPosicion($index)->get() as $etiqueta){
				$emc_area = new EncuestaManipulacionArea;
				$emc_area->etiqueta_id = $etiqueta->id;
				$emc_area->empresa_id = $empresa->id;
				$emc_area->codigo_encuesta = $codigo_encuesta;
				$emc_area->codigo_area = $codigo_area;
				if(isset($area_campos['no_existe'][$etiqueta->id]) && ($area_campos['no_existe'][$etiqueta->id] == "1")){
					$emc_area->no_existe = $area_campos['no_existe'][$etiqueta->id];
				}else{
					if(isset($area_campos['esta_limpio'][$etiqueta->id])){
						$emc_area->esta_limpio = $area_campos['esta_limpio'][$etiqueta->id];	
					}
					if(isset($area_campos['es_limpio'][$etiqueta->id]))
						$emc_area->es_limpio = $area_campos['es_limpio'][$etiqueta->id];
					if(isset($area_campos['es_adecuado'][$etiqueta->id]))
						$emc_area->es_adecuado = $area_campos['es_adecuado'][$etiqueta->id];
					if(isset($area_campos['esta_en_mantenimiento'][$etiqueta->id]))	
						$emc_area->esta_en_mantenimiento = $area_campos['esta_en_mantenimiento'][$etiqueta->id];	
					if(isset($area_campos['funciona'][$etiqueta->id]))
						$emc_area->funciona = $area_campos['funciona'][$etiqueta->id];	
					if(isset($area_campos['es_ordenado'][$etiqueta->id])){
						$emc_area->es_ordenado = $area_campos['es_ordenado'][$etiqueta->id];	
					}
					
				}
				$emc_area->save();
			}
			foreach(Etiqueta::getEtiquetasPorPosicion($index + 1)->get() as $etiqueta){
				$emc_area = new EncuestaManipulacionArea;
				$emc_area->etiqueta_id = $etiqueta->id;
				$emc_area->empresa_id = $empresa->id;
				$emc_area->codigo_encuesta = $codigo_encuesta;
				$emc_area->codigo_area = $codigo_area;
				if(isset($area_campos['cumple'][$etiqueta->id]))
						$emc_area->cumple = $area_campos['cumple'][$etiqueta->id];	
				$emc_area->save();
			}
		}
	}


	//Control de manipulación de alimentos e higiene de los bares de la PUCE
	public function nuevaEncuestaManipulacionBares()
	{
		$empresa = Empresa::find(Input::get('empresa_id'));
		$opciones = array("Manipulación de Alimentos", "Productos Alimenticios", "Control de Plagas", "Area de Bar", "Area de Comedor", 
						"Area de Almacenaje de Materiales de Limpieza");
		return View::make('encuestas.nueva_encuesta_manipulacion_alimentos_higiene_bares', array('empresa' => $empresa, 'opciones' => $opciones));
	}

	public function nuevaEncuestaManipulacionBaresGuardarInformacion(){
		$empresa = Empresa::find(Input::get('empresa_id'));
		$campos = Input::all();
		
		//Manipulacion de alimentos
		EncuestasController::manipulacion_alimentos($campos['encuestas_manipulacion_alimentos'], $empresa, 14);
		
		EncuestasController::productos_alimenticios($campos['encuestas_productos_alimenticios'], $empresa, 15);
		EncuestasController::control_de_plagas($campos['control_de_plagas'], $empresa, 16);
		//AREAS
		EncuestasController::creacion_de_area($campos['area_bar'], $empresa, 'encuesta_manipulacion_bar', Config::get('constants.CODIGOS_AREAS.5'), 17);
		EncuestasController::creacion_de_area($campos['area_comedor'], $empresa, 'encuesta_manipulacion_bar', Config::get('constants.CODIGOS_AREAS.6'), 19);
		EncuestasController::creacion_de_area($campos['area_materiales_limpieza'], $empresa, 'encuesta_manipulacion_bar', Config::get('constants.CODIGOS_AREAS.7'), 21);
		

		return Redirect::to('/encuesta_manipulacion_bares/nueva_empresa');
	}
	
}

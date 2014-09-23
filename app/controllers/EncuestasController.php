<?php

class EncuestasController extends BaseController {

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
		if(Auth::user()->edito_perfil == "SI"){
			$tipos_de_alimentos = TipoDeAlimento::orderBy('nombre')->get();
			return View::make('encuestas.consumoAlimentos', array('tipos_de_alimentos' => $tipos_de_alimentos));
		}else{
			return Redirect::to('/edit')->with('error', 'Por favor completa tu perfil para poder continuar con la encuesta');			
		}		
	}

	public function consumoAlimentosBares()
	{
		if(Auth::user()->edito_perfil == "SI"){
			$tipos_de_alimentos_bares = TipoDeAlimentoBares::orderBy('nombre')->get();
        return View::make('encuestas.consumoAlimentosBares', array('tipos_de_alimentos_bares' => $tipos_de_alimentos_bares));
		}else{
			return Redirect::to('/edit')->with('error', 'Por favor completa tu perfil para poder continuar con la encuesta');			
		}
	}

	public function consumoHabitual()
	{
		return View::make('encuestas.consumoHabitual');
	}

	public function manipulacionComedores()
	{
		return View::make('encuestas.manipulacionComedores');
	}

	public function createManipulacionComedores()
	{
		$campos = Input::all();
		if($campos['encuesta']==1)
			return View::make('encuestas.emc_manipulacion_alimentos');
		if($campos['encuesta']==2)
			return View::make('encuestas.emc_productos_alimenticios');
		if($campos['encuesta']==3)
			return View::make('encuestas.emc_control_plagas');
		if($campos['encuesta']==4)
			return View::make('encuestas.emc_area_cocina');
		if($campos['encuesta']==5)
			return View::make('encuestas.emc_area_comedor');
		if($campos['encuesta']==6)
			return View::make('encuestas.emc_area_bodega_alimentos');
		if($campos['encuesta']==7)
			return View::make('encuestas.emc_area_vestidor');
		if($campos['encuesta']==8)
			return View::make('encuestas.emc_area_almacenaje_materiales_limpieza');
		if($campos['encuesta']==9)
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
		$campos = Input::all();
		for($i = 0; $i < 126 ; $i++){
			if(isset($campos['frecuencia'][$i])){
				$encuesta = EncuestaAlimentosUniversidad::where("usuario_id", "=", Auth::user()->id)->where("alimento_id", "=", $campos['frecuencia']['alimento'][$i])->first();
				//Reviso si es que ya existe un dato guardado para el usuario para decidir si se va a editar o a crear nuevo.
				if(!isset($encuesta)){
					$encuesta = new EncuestaAlimentosUniversidad;	
				}
				$encuesta->alimento_id = $campos['frecuencia']['alimento'][$i];
				$encuesta->frecuencia = $campos['frecuencia'][$i];
				$encuesta->usuario_id = Auth::user()->id;
				$encuesta->num_porciones = $campos['frecuencia']['porciones'][$i];
				$encuesta->save();
			}
		}
		if (isset($_SERVER['HTTP_X_REQUESTED_WITH'])
				     AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
							 //No haga nada
   				 }else{
							$tipos_de_alimentos = TipoDeAlimento::orderBy('nombre')->get();
							return View::make('encuestas.consumoAlimentos', array('tipos_de_alimentos' => $tipos_de_alimentos, 'message' => "Borrador grabado exitosamente!"));
		}
	}

	public function createConsumoAlimentosBares()
	{
		$campos = Input::all();
		for($i = 0; $i < 161 ; $i++){
			if(isset($campos['frecuencia'][$i])){
				$encuesta = EncuestaAlimentosBares::where("usuario_id", "=", Auth::user()->id)->where("alimento_bares_id", "=", $campos['frecuencia']['alimento'][$i])->first();
				//Reviso si es que ya existe un dato guardado para el usuario para decidir si se va a editar o a crear nuevo.
				if(!isset($encuesta)){
					$encuesta = new EncuestaAlimentosBares;	
				}
				$encuesta->alimento_bares_id = $campos['frecuencia']['alimento'][$i];
				$encuesta->frecuencia = $campos['frecuencia'][$i];
				$encuesta->usuario_id = Auth::user()->id;
				$encuesta->num_porciones = $campos['frecuencia']['porciones'][$i];
				$encuesta->save();
			}
		}
		if (isset($_SERVER['HTTP_X_REQUESTED_WITH'])
				     AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
							 //No haga nada
   				 }else{
							$tipo_de_alimento_bares = TipoDeAlimentoBares::orderBy('nombre')->get();
							return View::make('encuestas.consumoAlimentosBares', array('tipos_de_alimentos_bares' => $tipo_de_alimento_bares, 'message' => "Borrador grabado exitosamente!"));
		}
	}


	public function obtener_alumno_randomicamente()
	{
		return User::obtenerEstudianteRandomicamente()->first();

	}

	public function grabar_consumo_habitual()
	{
		$campos = Input::all();
		// return $campos;
		// return $campos['numero_de_preparaciones_desayuno'];
		$tiempos = ["desayuno", "media_manana", "almuerzo", "media_tarde", "merienda"];
		foreach($tiempos as $tiempo){ 
			$consumo_habitual = new ConsumoHabitualDeAlimento;
			$consumo_habitual->usuario_id = $campos['alumno_id'];
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
					$preparacion_consumo_habitual->cantidad_en_medidas_caseras = $campos['cantidad_'.$tiempo.'_'.$i];
					$preparacion_consumo_habitual->numero_de_porciones = $campos['porciones_'.$tiempo.'_'.$i];
					$preparacion_consumo_habitual->grupo_de_alimentos = $campos['grupo_alimento_'.$tiempo.'_'.$i];
					$preparacion_consumo_habitual->save();
					foreach($campos['ingredientes_'.$tiempo.'_'.$i] as $ingrediente){
						if(isset($ingrediente) && $ingrediente <> ""){
							$ingrediente_preparacion = new IngredientesPreparacionConsumoHabitualDeAlimento;
							$ingrediente_preparacion->preparacion_consumo_habitual_de_alimentos_id = $preparacion_consumo_habitual->id;
							$ingrediente_preparacion->ingrediente = $ingrediente;
							$ingrediente_preparacion->save();
						}
					}
					// return $preparacion_consumo_habitual_desayuno;
				}
			}
		}
		$user = User::find($campos['alumno_id']);
		$user->tiene_consumo_habitual = true;
		$user->save();
		return View::make('encuestas.consumoHabitual', array('message' => "Consumo habitual grabado exitosamente"));
		
		

		
	}

}

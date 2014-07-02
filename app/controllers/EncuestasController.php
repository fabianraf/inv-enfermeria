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
	public function consumoAlimentos()
	{
		$tipos_de_alimentos = TipoDeAlimento::orderBy('nombre')->get();
		return View::make('encuestas.consumoAlimentos', array('tipos_de_alimentos' => $tipos_de_alimentos));
	}

	public function consumoAlimentosBares()
	{
		$tipos_de_alimentos_bares = TipoDeAlimentoBares::orderBy('nombre')->get();
        return View::make('encuestas.consumoAlimentosBares', array('tipos_de_alimentos_bares' => $tipos_de_alimentos_bares));
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

	public function createConsumoAlimentos()
	{
		$campos = Input::all();
		// if (isset($_SERVER['HTTP_X_REQUESTED_WITH'])
		//     AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
		//    return $campos;
		// }
		// return $campos;
// 		$aceites_y_grasas = $campos;
		$tipo_de_alimentos = TipoDeAlimento::all();
		foreach($campos['frecuencia'] as $frecuencia){
			$encuesta = new EncuestaAlimentosUniversidad;
			$encuesta->alimento_id = $frecuencia;
			
		}
		return $encuesta;
		// return $campos['frecuencia']['aceite-de-girasol'];

		// foreach($tipo_de_alimentos as $tipo_de_alimento){
// 			foreach($tipo_de_alimento->alimentos as $alimento){
// 				if(isset($campos['frecuencia'][''.Helper::clean($alimento->nombre).'']))
// 					// return $campos['frecuencia'][''.Helper::clean($alimento->nombre).''];
// 					$encuesta = new EncuestaAlimentosUniversidad;
// 					$encuesta->alimento_id = $campos['frecuencia'][''.Helper::clean($alimento->nombre).''];
// 			}
//
// 			// Helper::clean($alimento->nombre)
// 		}
		return $encuesta;
	}

	public function createConsumoAlimentosBares()
	{
		$campos = Input::all();
		$id = $campos['tipo_alimento_id'];
		$tipo_de_alimento_bares = TipoDeAlimentoBares::find($id);
    	$alimentos = $tipo_de_alimento_bares->alimentosBares;
		$tipo_de_alimento_bares = TipoDeAlimentoBares::orderBy('nombre')->get();
        return View::make('encuestas.consumoAlimentosBares', array('tipos_de_alimentos_bares' => $tipo_de_alimento_bares,
        													  'tipo_de_alimento_id' => $id,
        													  'alimentos' => $alimentos));
	}

}

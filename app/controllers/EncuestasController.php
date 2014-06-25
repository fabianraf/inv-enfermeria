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
		$encabezados_preguntas = EncabezadoPreguntasEncuestas::distinct()->where('tipo_encuesta_id', '=', '2')->get(array('encabezado'));
		return View::make('encuestas.manipulacionComedores', array('encabezados_preguntas' => $encabezados_preguntas));
	}

	public function manipulacionBares()
	{
		$encabezados_preguntas = EncabezadoPreguntasEncuestas::distinct()->where('tipo_encuesta_id', '=', '3')->get(array('encabezado'));
		return View::make('encuestas.manipulacionBares', array('encabezados_preguntas' => $encabezados_preguntas));
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
		if (isset($_SERVER['HTTP_X_REQUESTED_WITH'])
		    AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
		   return $campos;
		}
		
		$id = $campos['tipo_alimento_id'];
		$tipo_de_alimento = TipoDeAlimento::find($id);
    	$alimentos = $tipo_de_alimento->alimentos;
		$tipos_de_alimentos = TipoDeAlimento::orderBy('nombre')->get();
        return View::make('encuestas.consumoAlimentos', array('tipos_de_alimentos' => $tipos_de_alimentos,
        													  'tipo_de_alimento_id' => $id,
        													  'alimentos' => $alimentos));
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

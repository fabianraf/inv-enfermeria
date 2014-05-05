<?php

class TipoDeAlimentosController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('grupo_de_alimentos.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$tipos_de_alimentos = TipoDeAlimento::all();
    return View::make('tipo_de_alimentos.create', array('tipos_de_alimentos' => $tipos_de_alimentos));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validator = Validator::make($input, TipoDeAlimento::$rules);
		if ($validator->passes()) {
			$index = TipoDeAlimento::all()->count() + 1;
				$tipo_de_alimento = TipoDeAlimento::create($input);
				return View::make("tipo_de_alimentos/tipo_de_alimento", array("tipo_de_alimento" => $tipo_de_alimento, 'index' => $index));
				
				
		} else {
			return Response::json($validator->messages(), 403);
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        return View::make('grupodealimentos.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        return View::make('grupodealimentos.edit');
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

}

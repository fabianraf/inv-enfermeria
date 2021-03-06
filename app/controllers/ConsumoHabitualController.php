<?php

class ConsumoHabitualController extends BaseController {

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
		$usuarios_con_encuesta = User::usuariosConConsumohabitual()->paginate(15);
		return View::make('consumo_habitual.index', array('usuarios_con_encuesta' => $usuarios_con_encuesta));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('consumohabituals.create');
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
        return View::make('consumohabituals.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        return View::make('consumohabituals.edit');
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

	public function eliminar($id){
		$user = User::find($id);
		$consumoHabituales = ConsumoHabitualDeAlimento::where("usuario_id", "=", $id)->get();		
		foreach($consumoHabituales as $consumoHabitual)
			$consumoHabitual->delete();
		$user->tiene_consumo_habitual=FALSE;
		$user->save();
		return Redirect::to('/encuestas_consumo_habitual')->with('mensaje', "Consumo habitual eliminado exitosamente.");	    
	}

}

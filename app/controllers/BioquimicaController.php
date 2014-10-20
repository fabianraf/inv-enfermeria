<?php

class BioquimicaController extends BaseController {


	public function main()
	{
        $estudiantes = User::where('tipo', '=', 'estudiante')
        					->orderBy('nombre')
                            ->orderBy('apellido')
                            ->paginate(5);		                          
        return View::make('bioquimica.main', array('estudiantes' => $estudiantes));
	}

	public function buscarEstudiantes()
	{
		$campos = Input::all();
		$id = $campos['alumno_id'];
		$estudiante = User::find($id);
		$bioquimica = Bioquimica::where('usuario_id', '=', $estudiante->id)
        								->first();
        if(count($bioquimica)>0)
        	return View::make('bioquimica.main', array('estudiante' => $estudiante,
        													'bioquimica' => $bioquimica));
       	else
			return View::make('bioquimica.main', array('estudiante' => $estudiante));		
	}

	public function ingresarDatos($id)
	{
		$estudiante = User::find($id);
        $bioquimica = Bioquimica::where('usuario_id', '=', $estudiante->id)
        								->first();
        if(count($bioquimica)>0)
        	return View::make('bioquimica.main', array('estudiante' => $estudiante,
        													'bioquimica' => $bioquimica));
       	else
			return View::make('bioquimica.create', array('estudiante' => $estudiante));
		
	}

	public function create()
	{
		$campos = Input::all();
		$validator = Validator::make($campos, Bioquimica::$rules);
		if ($validator->passes()) {
			$estudiante = User::find($campos['estudiante_id']);		
			$bioquimica = new Bioquimica;
			$bioquimica->usuario_id = $estudiante->id;
			$bioquimica->wbc = $campos['wbc'];
			$bioquimica->neutrofilos = $campos['neutrofilos'];
			$bioquimica->linfocitos = $campos['linfocitos'];
			$bioquimica->monocitos = $campos['monocitos'];
			$bioquimica->eosinofilos = $campos['eosinofilos'];
			$bioquimica->basofilos = $campos['basofilos'];
			$bioquimica->linfocitos_atipicos = $campos['linfocitos_atipicos'];
			$bioquimica->celulas_grandes_inmaduras = $campos['celulas_grandes_inmaduras'];
			$bioquimica->rbc = $campos['rbc'];
			$bioquimica->hgb = $campos['hgb'];
			$bioquimica->hct = $campos['hct'];
			$bioquimica->rdw = $campos['rdw'];
			$bioquimica->plt = $campos['plt'];
			$bioquimica->mch = $campos['mch'];
			$bioquimica->mchc = $campos['mchc'];
			$bioquimica->mcv = $campos['mcv'];
			$bioquimica->colesterol = $campos['colesterol'];
			$bioquimica->hdl_colesterol = $campos['hdl_colesterol'];
			$bioquimica->trigliceridos = $campos['trigliceridos'];
			$bioquimica->glucosa_ayunas = $campos['glucosa_ayunas'];
			$bioquimica->ldl_colesterol = $campos['ldl_colesterol'];
			$bioquimica->hbsag = $campos['hbsag'];
			$bioquimica->save();		
			$estudiante->bioquimica = 'SI';
			$estudiante->save();
			$id=$estudiante->id;
			return Redirect::action('BioquimicaController@ingresarDatos', array('id' => $id));
		}else {
		    return Redirect::back()->withInput()->withErrors($validator->messages());
		}
	}

}

<?php

class BioquimicaController extends BaseController {


	public function main()
	{
		if(Auth::user()->perfiles_usuario_id == "2"){
			$id = Auth::user()->id;
			$estudiante = User::find($id);
			return View::make('bioquimica.main', array('estudiante' => $estudiante));
		}
		else
			return View::make('bioquimica.main');
	}

	public function buscarEstudiantes()
	{
		$campos = Input::all();
		$id = $campos['alumno_id'];
		if (is_numeric($id)){ 
			$estudiante = User::find($id);
			$bioquimica = Bioquimica::where('usuario_id', '=', $estudiante->id)
	        								->first();
	        if(count($bioquimica)>0)
	        	return View::make('bioquimica.main', array('estudiante' => $estudiante,
	        													'bioquimica' => $bioquimica));
	       	else
				return View::make('bioquimica.main', array('estudiante' => $estudiante));
		}return View::make('bioquimica.main')->with('message', 'El estudiante no se encuentra en la base de datos');
				
	}

	public function ingresarDatos($id)
	{
		$estudiante = User::find($id);
        $bioquimica = Bioquimica::where('usuario_id', '=', $estudiante->id)
        								->first();
        if(count($bioquimica)>0)
        	return View::make('bioquimica.create', array('estudiante' => $estudiante,
        													'bioquimica' => $bioquimica));
       	else
			return View::make('bioquimica.create', array('estudiante' => $estudiante));
		
	}

	public function create()
	{
		$campos = Input::all();
		$validator = Validator::make($campos, Bioquimica::$rules);
		if ($validator->passes()) {
			if(isset($campos['bioquimica_id'])){
				$estudiante = User::find($campos['estudiante_id']);
				$bioquimica = Bioquimica::find($campos['bioquimica_id']);
		}else{

			$estudiante = User::find($campos['estudiante_id']);		
			$bioquimica = new Bioquimica;
		}			
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
			$estudiante->bioquimica = TRUE;
			$estudiante->save();
			$id=$estudiante->id;
			return View::make('bioquimica.create', array('estudiante' => $estudiante,
        													'bioquimica' => $bioquimica))->with('message', 'La información ha sido guardada correctamente');
		}else {
		    return Redirect::back()->withInput()->withErrors($validator->messages());
		}
	}

	public function reporteBioquimica()
	{
		$users = User::has('bioquimica')->orderBy('nombre')
                ->orderBy('apellido')->paginate(20);
		return View::make('reportes.bioquimica', array('users' => $users));
	}

	public function reporteEstudiante($id)
	{
		$estudiante = User::find($id);		
		return View::make('reportes.bioquimica_detalle', array('estudiante' => $estudiante));
	}

}

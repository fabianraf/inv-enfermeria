<?php

class BioquimicaController extends BaseController {

	function __construct() {
        $this->beforeFilter('auth');
    }
    
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
			if($bioquimica->wbc<4.4)
				$bioquimica->interpretacion_wbc = 'Bajo';
			elseif($bioquimica->wbc>=4.4 && $bioquimica->wbc<=11.3)
				$bioquimica->interpretacion_wbc = 'Normal';
			elseif($bioquimica->wbc>11.3)
				$bioquimica->interpretacion_wbc = 'Alto';

			$bioquimica->neutrofilos = $campos['neutrofilos'];
			if($bioquimica->neutrofilos<43)
				$bioquimica->interpretacion_neutrofilos = 'Bajo';
			elseif($bioquimica->neutrofilos>=43 && $bioquimica->neutrofilos<=65)
				$bioquimica->interpretacion_neutrofilos = 'Normal';
			elseif($bioquimica->neutrofilos>65)
				$bioquimica->interpretacion_neutrofilos = 'Alto';

			$bioquimica->linfocitos = $campos['linfocitos'];
			if($bioquimica->linfocitos<20.5)
				$bioquimica->interpretacion_linfocitos = 'Bajo';
			elseif($bioquimica->linfocitos>=20.5 && $bioquimica->linfocitos<=45.5)
				$bioquimica->interpretacion_linfocitos = 'Normal';
			elseif($bioquimica->linfocitos>45.5)
				$bioquimica->interpretacion_linfocitos = 'Alto';

			$bioquimica->monocitos = $campos['monocitos'];
			if($bioquimica->monocitos<3)
				$bioquimica->interpretacion_monocitos = 'Bajo';
			elseif($bioquimica->monocitos>=3 && $bioquimica->monocitos<=10)
				$bioquimica->interpretacion_monocitos = 'Normal';
			elseif($bioquimica->monocitos>10)
				$bioquimica->interpretacion_monocitos = 'Alto';

			$bioquimica->eosinofilos = $campos['eosinofilos'];
			if($bioquimica->eosinofilos<1)
				$bioquimica->interpretacion_eosinofilos = 'Bajo';
			elseif($bioquimica->eosinofilos>=1 && $bioquimica->eosinofilos<=5)
				$bioquimica->interpretacion_eosinofilos = 'Normal';
			elseif($bioquimica->eosinofilos>5)
				$bioquimica->interpretacion_eosinofilos = 'Alto';

			$bioquimica->basofilos = $campos['basofilos'];
			if($bioquimica->basofilos>=0 && $bioquimica->basofilos<=0.5)
				$bioquimica->interpretacion_basofilos = 'Normal';
			elseif($bioquimica->basofilos>0.5)
				$bioquimica->interpretacion_basofilos = 'Alto';

			$bioquimica->linfocitos_atipicos = $campos['linfocitos_atipicos'];
			if($bioquimica->linfocitos_atipicos>=0 && $bioquimica->linfocitos_atipicos<=2)
				$bioquimica->interpretacion_linfocitos_atipicos = 'Normal';
			elseif($bioquimica->linfocitos_atipicos>2)
				$bioquimica->interpretacion_linfocitos_atipicos = 'Alto';

			$bioquimica->celulas_grandes_inmaduras = $campos['celulas_grandes_inmaduras'];
			if($bioquimica->celulas_grandes_inmaduras>=0 && $bioquimica->celulas_grandes_inmaduras<=1)
				$bioquimica->interpretacion_celulas_grandes_inmaduras = 'Normal';
			elseif($bioquimica->celulas_grandes_inmaduras>1)
				$bioquimica->interpretacion_celulas_grandes_inmaduras = 'Alto';

			$bioquimica->rbc = $campos['rbc'];
			if($bioquimica->rbc<3.9)
				$bioquimica->interpretacion_rbc = 'Bajo';
			elseif($bioquimica->rbc>=3.9 && $bioquimica->rbc<=5.6)
				$bioquimica->interpretacion_rbc = 'Normal';
			elseif($bioquimica->rbc>5.6)
				$bioquimica->interpretacion_rbc = 'Alto';

			$bioquimica->hgb = $campos['hgb'];
			if($bioquimica->hgb<12.6)
				$bioquimica->interpretacion_hgb = 'Bajo';
			elseif($bioquimica->hgb>=12.6 && $bioquimica->hgb<=15.4)
				$bioquimica->interpretacion_hgb = 'Normal';
			elseif($bioquimica->hgb>15.4)
				$bioquimica->interpretacion_hgb = 'Alto';

			$bioquimica->hct = $campos['hct'];
			if($bioquimica->hct<38)
				$bioquimica->interpretacion_hct = 'Bajo';
			elseif($bioquimica->hct>=38 && $bioquimica->hct<=49)
				$bioquimica->interpretacion_hct = 'Normal';
			elseif($bioquimica->hct>49)
				$bioquimica->interpretacion_hct = 'Alto';

			$bioquimica->rdw = $campos['rdw'];
			if($bioquimica->rdw<11.5)
				$bioquimica->interpretacion_rdw = 'Bajo';
			elseif($bioquimica->rdw>=11.5 && $bioquimica->rdw<=15.5)
				$bioquimica->interpretacion_rdw = 'Normal';
			elseif($bioquimica->rdw>15.5)
				$bioquimica->interpretacion_rdw = 'Alto';

			$bioquimica->plt = $campos['plt'];
			if($bioquimica->plt<150)
				$bioquimica->interpretacion_plt = 'Bajo';
			elseif($bioquimica->plt>=150 && $bioquimica->plt<=450)
				$bioquimica->interpretacion_plt = 'Normal';
			elseif($bioquimica->plt>450)
				$bioquimica->interpretacion_plt = 'Alto';

			$bioquimica->mch = $campos['mch'];
			if($bioquimica->mch<27)
				$bioquimica->interpretacion_mch = 'Bajo';
			elseif($bioquimica->mch>=27 && $bioquimica->mch<=31)
				$bioquimica->interpretacion_mch = 'Normal';
			elseif($bioquimica->mch>31)
				$bioquimica->interpretacion_mch = 'Alto';

			$bioquimica->mchc = $campos['mchc'];
			if($bioquimica->mchc<31)
				$bioquimica->interpretacion_mchc = 'Bajo';
			elseif($bioquimica->mchc>=31 && $bioquimica->mchc<=36)
				$bioquimica->interpretacion_mchc = 'Normal';
			elseif($bioquimica->mchc>36)
				$bioquimica->interpretacion_mchc = 'Alto';

			$bioquimica->mcv = $campos['mcv'];
			if($bioquimica->mcv<81)
				$bioquimica->interpretacion_mcv = 'Bajo';
			elseif($bioquimica->mcv>=81 && $bioquimica->mcv<=99)
				$bioquimica->interpretacion_mcv = 'Normal';
			elseif($bioquimica->mcv>99)
				$bioquimica->interpretacion_mcv = 'Alto';

			$bioquimica->colesterol = $campos['colesterol'];
			if($bioquimica->colesterol>=0 && $bioquimica->colesterol<=200)
				$bioquimica->interpretacion_colesterol = 'Normal';
			elseif($bioquimica->colesterol>200)
				$bioquimica->interpretacion_colesterol = 'Alto';

			$bioquimica->hdl_colesterol = $campos['hdl_colesterol'];
			if($bioquimica->hdl_colesterol<40)
				$bioquimica->interpretacion_hdl_colesterol = 'Bajo';
			elseif($bioquimica->hdl_colesterol>=40 && $bioquimica->hdl_colesterol<=60)
				$bioquimica->interpretacion_hdl_colesterol = 'Normal';
			elseif($bioquimica->hdl_colesterol>60)
				$bioquimica->interpretacion_hdl_colesterol = 'Alto';

			$bioquimica->trigliceridos = $campos['trigliceridos'];
			if($bioquimica->trigliceridos<=150)
				$bioquimica->interpretacion_trigliceridos = 'Normal';
			else
				$bioquimica->interpretacion_trigliceridos = 'Alto';

			$bioquimica->ldl_colesterol = $campos['ldl_colesterol'];
			if($bioquimica->ldl_colesterol<=150)
				$bioquimica->interpretacion_ldl_colesterol = 'Normal';
			else
				$bioquimica->interpretacion_ldl_colesterol = 'Alto';

			$bioquimica->glucosa_ayunas = $campos['glucosa_ayunas'];
			if($bioquimica->glucosa_ayunas<70)
				$bioquimica->interpretacion_glucosa_ayunas = 'Bajo';
			elseif($bioquimica->glucosa_ayunas>=70 && $bioquimica->glucosa_ayunas<=100)
				$bioquimica->interpretacion_glucosa_ayunas = 'Normal';
			elseif($bioquimica->glucosa_ayunas>100)
				$bioquimica->interpretacion_glucosa_ayunas = 'Alto';

			$bioquimica->hbsag = $campos['hbsag'];
			if($bioquimica->hbsag<1)
				$bioquimica->interpretacion_hbsag = 'No Reactivo';
			else
				$bioquimica->interpretacion_hbsag = 'Reactivo';

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

}

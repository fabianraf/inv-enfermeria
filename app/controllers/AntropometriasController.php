<?php

class AntropometriasController extends BaseController {

	function __construct() {
        $this->beforeFilter('auth');
    }

	public function main()
	{
		if(Auth::user()->perfiles_usuario_id == "2"){
			$id = Auth::user()->id;
			$estudiante = User::find($id);
			return View::make('antropometrias.main', array('estudiante' => $estudiante));
		}
		else
			return View::make('antropometrias.main');
	}

	public function buscarEstudiantes()
	{
		$campos = Input::all();
		$id = $campos['alumno_id'];
		if (is_numeric($id)){    	
    		$estudiante = User::find($id);		
			$antropometria = Antropometrias::where('usuario_id', '=', $estudiante->id)
        								->first();
        	if(count($antropometria)>0)
        		return View::make('antropometrias.main', array('estudiante' => $estudiante,
        													'antropometria' => $antropometria));
        	else
				return View::make('antropometrias.main', array('estudiante' => $estudiante));

		}else
			return View::make('antropometrias.main')->with('message', 'El estudiante no se encuentra en la base de datos');
	}

	public function ingresarDatos($id)
	{
		$estudiante = User::find($id);
        $antropometria = Antropometrias::where('usuario_id', '=', $estudiante->id)
        								->first();
        if(count($antropometria)>0)
        	return View::make('antropometrias.create', array('estudiante' => $estudiante,
        													'antropometria' => $antropometria));
       	else
			return View::make('antropometrias.create', array('estudiante' => $estudiante));
		
	}

	public function create()
	{
		$campos = Input::all();
		$validator = Validator::make($campos, Antropometrias::$rules, Antropometrias::$messages);
		if ($validator->passes()) {
			if(isset($campos['antropometria_id'])){
				$estudiante = User::find($campos['estudiante_id']);
				$antropometria = Antropometrias::find($campos['antropometria_id']);
		}else{

			$estudiante = User::find($campos['estudiante_id']);		
			$antropometria = new Antropometrias;
		}
		$antropometria->usuario_id = $estudiante->id;
		$antropometria->peso = $campos['peso'];
		$antropometria->talla = $campos['talla'];		
		$antropometria->circunferencia_cintura = $campos['circunferencia_cintura'];
		$antropometria->circunferencia_cadera = $campos['circunferencia_cadera'];		
		$antropometria->circunferencia_media_brazo = $campos['circunferencia_media_brazo'];		
		$antropometria->pliegue_subescapular = $campos['pliegue_subescapular'];
		$antropometria->pliegue_suprailiaco = $campos['pliegue_suprailiaco'];

		$antropometria->imc = $campos['peso']/($campos['talla']*$campos['talla']);
		$antropometria->indice_cintura_cadera = $campos['circunferencia_cintura']/$campos['circunferencia_cadera'];
		if($estudiante->genero=='M')
			$antropometria->porcentaje_cmb = ($campos['circunferencia_media_brazo']/29.3)*100;
		elseif($estudiante->genero=='F')
			$antropometria->porcentaje_cmb = ($campos['circunferencia_media_brazo']/28.5)*100;
		$antropometria->pliegue_bicipital = $campos['pliegue_bicipital'];
		$antropometria->pliegue_tricipital = $campos['pliegue_tricipital'];
		if($estudiante->genero=='M')
			$antropometria->porcentaje_pt = ($campos['pliegue_tricipital']/12.5)*100;
		elseif($estudiante->genero=='F')
			$antropometria->porcentaje_pt = ($campos['pliegue_tricipital']/16.5)*100;
		
		if($antropometria->imc<16)
			$antropometria->interpretacion_imc = 'Desnutrición severa';
		elseif($antropometria->imc>=16 && $antropometria->imc<=16.9)
			$antropometria->interpretacion_imc = 'Desnutrición moderada';
		elseif($antropometria->imc>=17 && $antropometria->imc<=18.4)
			$antropometria->interpretacion_imc = 'Desnutrición leve';
		elseif($antropometria->imc>=18.5 && $antropometria->imc<=24.9)
			$antropometria->interpretacion_imc = 'Normal';
		elseif($antropometria->imc>=25 && $antropometria->imc<=29.9)
			$antropometria->interpretacion_imc = 'Sobrepeso';
		elseif($antropometria->imc>=30 && $antropometria->imc<=34.9)
			$antropometria->interpretacion_imc = 'Obesidad I';
		elseif($antropometria->imc>=35 && $antropometria->imc<=39.9)
			$antropometria->interpretacion_imc = 'Obesidad II';
		elseif($antropometria->imc>=40)
			$antropometria->interpretacion_imc = 'Obesidad mórbida';
		else
			$antropometria->interpretacion_imc = '';

		if($estudiante->genero=='M')
			if($antropometria->indice_cintura_cadera<0.96)
				$antropometria->interpretacion_indice_cintura_cadera = 'Muy bajo';
			elseif($antropometria->indice_cintura_cadera>=0.96 && $antropometria->indice_cintura_cadera<=0.99)
				$antropometria->interpretacion_indice_cintura_cadera = 'Bajo';
			elseif($antropometria->indice_cintura_cadera>0.99)
				$antropometria->interpretacion_indice_cintura_cadera = 'Alto';
			else
				$antropometria->interpretacion_indice_cintura_cadera = '';

		if($estudiante->genero=='F')
			if($antropometria->indice_cintura_cadera<0.81)
				$antropometria->interpretacion_indice_cintura_cadera = 'Muy bajo';
			elseif($antropometria->indice_cintura_cadera>=0.81 && $antropometria->indice_cintura_cadera<=0.84)
				$antropometria->interpretacion_indice_cintura_cadera = 'Bajo';
			elseif($antropometria->indice_cintura_cadera>0.84)
				$antropometria->interpretacion_indice_cintura_cadera = 'Alto';
			else
				$antropometria->interpretacion_indice_cintura_cadera = '';


		if($antropometria->porcentaje_cmb<60)
			$antropometria->interpretacion_cmb = 'Desnutrición severa';
		elseif($antropometria->porcentaje_cmb>=60 && $antropometria->porcentaje_cmb<80)
			$antropometria->interpretacion_cmb = 'Desnutrición moderada';
		elseif($antropometria->porcentaje_cmb>=80 && $antropometria->porcentaje_cmb<90)
			$antropometria->interpretacion_cmb = 'Desnutrición leve';
		elseif($antropometria->porcentaje_cmb>=90 && $antropometria->porcentaje_cmb<=109)
			$antropometria->interpretacion_cmb = 'Normal';
		else
			$antropometria->interpretacion_cmb = '';

		if($antropometria->porcentaje_pt<30)
			$antropometria->interpretacion_pliegue_tricipital = 'Déficit de grasa severo';
		elseif($antropometria->porcentaje_pt>=30 && $antropometria->porcentaje_pt<50)
			$antropometria->interpretacion_pliegue_tricipital = 'Déficit de grasa moderada';
		elseif($antropometria->porcentaje_pt>=50 && $antropometria->porcentaje_pt<90)
			$antropometria->interpretacion_pliegue_tricipital = 'Déficit de grasa leve';
		elseif($antropometria->porcentaje_pt>=90 && $antropometria->porcentaje_pt<=110)
			$antropometria->interpretacion_pliegue_tricipital = 'Normal';
		elseif($antropometria->porcentaje_pt>110)
			$antropometria->interpretacion_pliegue_tricipital = 'Exceso de grasa';
		else
			$antropometria->interpretacion_pliegue_tricipital = '';


		$antropometria->save();		
		$estudiante->antropometria = TRUE;
		$estudiante->save();		
		$id=$estudiante->id;
		return View::make('antropometrias.create', array('estudiante' => $estudiante,
	       													'antropometria' => $antropometria))->with('message', 'La información ha sido guardada correctamente');
		} else {
		    return Redirect::back()->withInput()->withErrors($validator->messages());
		}		
	}

	public function reporteAntropometria()
	{
		$users = User::has('antropometria')->orderBy('nombre')
                ->orderBy('apellido')->paginate(20);
		return View::make('reportes.antropometria', array('users' => $users));
	}

	public function reporteEstudiante($id)
	{
		$estudiante = User::find($id);		
		return View::make('reportes.antropometria_detalle', array('estudiante' => $estudiante));
	}

}

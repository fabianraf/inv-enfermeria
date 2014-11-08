<?php

class AntropometriasController extends BaseController {


	public function main()
	{
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
			return View::make('antropometrias.main')->with('message', 'Estudiante no se encuentra en la base de datos');


		


		

		/*$nombre = strtoupper($campos['nombre_alumno']);
        $estudiantes = User::where('tipo', '=', 'estudiante')
        					->where('nombre', 'like', '%'.$nombre.'%')
							->orWhere('tipo', '=', 'estudiante')
							->where('apellido', 'like', '%'.$nombre.'%')
                            ->orderBy('nombre')
                            ->orderBy('apellido')                                                
                            ->paginate(5);*/

		//return View::make('antropometrias.main', array('estudiante' => $estudiante));		
	}

	public function ingresarDatos($id)
	{
		$estudiante = User::find($id);
        $antropometria = Antropometrias::where('usuario_id', '=', $estudiante->id)
        								->first();
        if(count($antropometria)>0)
        	return View::make('antropometrias.main', array('estudiante' => $estudiante,
        													'antropometria' => $antropometria));
       	else
			return View::make('antropometrias.create', array('estudiante' => $estudiante));
		
	}

	public function create()
	{
		$campos = Input::all();
		$validator = Validator::make($campos, Antropometrias::$rules);
		if ($validator->passes()) {
			$estudiante = User::find($campos['estudiante_id']);		
			$antropometria = new Antropometrias;
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

			if($estudiante->genero=='M')
				if($antropometria->indice_cintura_cadera<0.96)
					$antropometria->interpretacion_indice_cintura_cadera = 'Muy bajo';
				elseif($antropometria->indice_cintura_cadera>=0.96 && $antropometria->indice_cintura_cadera<=0.99)
					$antropometria->interpretacion_indice_cintura_cadera = 'Bajo';
				elseif($antropometria->indice_cintura_cadera>0.99)
					$antropometria->interpretacion_indice_cintura_cadera = 'Alto';

			if($estudiante->genero=='F')
				if($antropometria->indice_cintura_cadera<0.81)
					$antropometria->interpretacion_indice_cintura_cadera = 'Muy bajo';
				elseif($antropometria->indice_cintura_cadera>=0.81 && $antropometria->indice_cintura_cadera<=0.84)
					$antropometria->interpretacion_indice_cintura_cadera = 'Bajo';
				elseif($antropometria->indice_cintura_cadera>0.84)
					$antropometria->interpretacion_indice_cintura_cadera = 'Alto';

			if($antropometria->cmb<60)
				$antropometria->interpretacion_cmb = 'Desnutrición severa';
			elseif($antropometria->imc>=60 && $antropometria->imc<80)
				$antropometria->interpretacion_cmb = 'Desnutrición moderada';
			elseif($antropometria->imc>=80 && $antropometria->imc<90)
				$antropometria->interpretacion_cmb = 'Desnutrición leve';
			elseif($antropometria->imc>=90 && $antropometria->imc<=109)
				$antropometria->interpretacion_cmb = 'Normal';

			$antropometria->save();		
			$estudiante->antropometria = TRUE;
			$estudiante->save();
			$id=$estudiante->id;
			return Redirect::action('AntropometriasController@ingresarDatos', array('id' => $id));
		} else {
		    return Redirect::back()->withInput()->withErrors($validator->messages());
		}		
	}
}

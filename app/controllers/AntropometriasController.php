<?php

class AntropometriasController extends BaseController {


	public function main()
	{
		$estudiantes = DB::table('usuarios')->where('tipo', '=', 'estudiante')
                                                ->orderBy('nombre')
                                                ->orderBy('apellido')                                                
                                                ->paginate(20);
		//$estudiantes = User::where('tipo', '=', 'estudiante');                             
        return View::make('antropometrias.main', array('estudiantes' => $estudiantes));
	}

	public function buscarEstudiantes()
	{
		$campos = Input::all();
		$nombre = $campos['busqueda'];
		$estudiantes = DB::table('usuarios')->where('tipo', '=', 'estudiante')
											->where('nombre', 'like', '%'.$nombre.'%')
											->orWhere('tipo', '=', 'estudiante')
											->where('apellido', 'like', '%'.$nombre.'%')
                                            ->orderBy('nombre')
                                            ->orderBy('apellido')                                                
                                            ->paginate(20);
		return View::make('antropometrias.main', array('estudiantes' => $estudiantes));		
	}

	public function ingresarDatos($id)
	{
		$estudiante = User::find($id);
		$antropometria = DB::table('antropometrias')->where('usuario_id', '=', $estudiante->id)                                    
                                                ->first();
        if(count($antropometria)>0)
        	return View::make('antropometrias.view', array('estudiante' => $estudiante,
        													'antropometria' => $antropometria));
       	else
			return View::make('antropometrias.create', array('estudiante' => $estudiante));
		
	}

	public function create()
	{
		$campos = Input::all();
		$estudiante = User::find($campos['estudiante_id']);		
		$antropometria = new Antropometrias;
		$antropometria->usuario_id = $estudiante->id;
		$antropometria->peso = $campos['peso'];
		$antropometria->talla = $campos['talla'];
		$antropometria->imc = $campos['peso']/($campos['talla']*$campos['talla']);
		$antropometria->circunferencia_cintura = $campos['circunferencia_cintura'];
		$antropometria->circunferencia_cadera = $campos['circunferencia_cadera'];
		$antropometria->indice_cintura_cadera = $campos['circunferencia_cintura']/$campos['circunferencia_cadera'];
		$antropometria->circunferencia_media_brazo = $campos['circunferencia_brazo'];
		if($estudiante->genero=='H')
			$antropometria->porcentaje_cmb = ($campos['circunferencia_brazo']/29.3)*100;
		elseif($estudiante->genero=='M')
			$antropometria->porcentaje_cmb = ($campos['circunferencia_brazo']/28.5)*100;
		$antropometria->pliegue_bicipital = $campos['pliegue_bicipital'];
		$antropometria->pliegue_tricipital = $campos['pliegue_tricipital'];
		if($estudiante->genero=='H')
			$antropometria->porcentaje_pt = ($campos['pliegue_tricipital']/12.5)*100;
		elseif($estudiante->genero=='M')
			$antropometria->porcentaje_pt = ($campos['pliegue_tricipital']/16.5)*100;
		$antropometria->pliegue_subescapular = $campos['pliegue_subescapular'];
		$antropometria->pliegue_suprailiaco = $campos['pliegue_suprailiaco'];
		$antropometria->save();
		$estudiante->antropometria = 'SI';
		$estudiante->save();
		$estudiantes = DB::table('usuarios')->where('tipo', '=', 'estudiante')
                                                ->orderBy('apellido')
                                                ->orderBy('nombre')                                                
                                                ->paginate(20);
		return View::make('antropometrias.main', array('estudiantes' => $estudiantes));		
	}

}
<?php

class EmpresasController extends BaseController {

	function __construct() {
        $this->beforeFilter('auth');
    }

	public function indexEmpresasHigienePersonal(){ 
		$empresas = Empresa::where('codigo_empresa','=','1')->orderBy("created_at")->get();        
        return View::make('empresas.main', array('empresas' => $empresas, 'codigo' => Config::get('constants.COD_EMPRESA_ENCUESTA_CHP')));
	}

	
	public function indexEncuestasManipulacionComedores(){ 
		$empresas = Empresa::where('codigo_empresa','=','2')->orderBy("created_at")->get();        
        return View::make('empresas.main', array('empresas' => $empresas, 'codigo' => Config::get('constants.COD_EMPRESA_ENCUESTA_CMAHC')));
	}	

	public function indexEncuestasManipulacionBares(){ 
		$empresas = Empresa::where('codigo_empresa','=','3')->orderBy("created_at")->get();        
        return View::make('empresas.main', array('empresas' => $empresas, 'codigo' => Config::get('constants.COD_EMPRESA_ENCUESTA_CMAHB')));
	}

	
	public function nuevaEmpresa(){
		return View::make('empresas.new');
	}

	public function informacionEmpresa($id){		
		$empresa = Empresa::find($id);
		return View::make('empresas.view', array('empresa' => $empresa));
	}

	public function informacionEmpleados($id){		
		$empresa = Empresa::find($id);		

		return View::make('empresas.view_empleados', array('empresa' => $empresa, 'empleados' => $empresa->empleados()->orderBy("created_at", "ASC")->paginate(10)));
	}

	public function nuevaEmpresaCMAHC()
		{
		return View::make('empresas.new_cmahc');
		}

	public function nuevaEmpresaCMAHB()
		{
		return View::make('empresas.new_cmahb');
		}

	public function crearEmpresa()
		{
			$input = Input::all();
			$validator = Validator::make($input, Empresa::$rules);
			if ($validator->passes()) {
				$empresa = Empresa::create($input);
				if($empresa->codigo_empresa == Config::get('constants.COD_EMPRESA_ENCUESTA_CHP')){	
					return Redirect::to('/encuesta_control_higiene_personal/nueva_encuesta?empresa_id='.$empresa->id);
				}elseif($empresa->codigo_empresa == Config::get('constants.COD_EMPRESA_ENCUESTA_CMAHC')){
					return Redirect::to('/encuesta_manipulacion_comedores/nueva_encuesta?empresa_id='.$empresa->id);
				}elseif($empresa->codigo_empresa == Config::get('constants.COD_EMPRESA_ENCUESTA_CMAHB')){
					return Redirect::to('/encuesta_manipulacion_bares/nueva_encuesta?empresa_id='.$empresa->id);
				}	

			    
			} else {
				if($input['codigo_empresa'] == Config::get('constants.COD_EMPRESA_ENCUESTA_CHP'))
			    	return Redirect::to('/encuesta_control_higiene_personal/nueva_empresa')->with('mensaje', 'Han ocurrido los siguientes errores:')->withErrors($validator)->withInput();
			    elseif($input['codigo_empresa'] == Config::get('constants.COD_EMPRESA_ENCUESTA_CMAHC'))
			    	return Redirect::to('/encuesta_manipulacion_comedores/nueva_empresa')->with('mensaje', 'Han ocurrido los siguientes errores:')->withErrors($validator)->withInput();
			    elseif($input['codigo_empresa'] == Config::get('constants.COD_EMPRESA_ENCUESTA_CMAHB'))
			    	return Redirect::to('/encuesta_manipulacion_bares/nueva_empresa')->with('mensaje', 'Han ocurrido los siguientes errores:')->withErrors($validator)->withInput();
			}
		}

	public function editarEmpresa($id)
		{
		$empresa = Empresa::find($id);
		if($empresa->codigo_empresa == Config::get('constants.COD_EMPRESA_ENCUESTA_CHP')){	
			return View::make("empresas.edit_chp", array('empresa' => $empresa));
		}elseif($empresa->codigo_empresa == Config::get('constants.COD_EMPRESA_ENCUESTA_CMAHC')){
			return View::make("empresas.edit_cmahc", array('empresa' => $empresa));
		}elseif($empresa->codigo_empresa == Config::get('constants.COD_EMPRESA_ENCUESTA_CMAHB')){
			return View::make("empresas.edit_cmahb", array('empresa' => $empresa));
		}	
		
		}

	public function guardarEmpresa($id){
		$empresa = Empresa::find($id);
		$input = Input::all();
		$validator = Validator::make($input, Empresa::$rules);
		if ($validator->passes()) {
			if(isset($input['nombre']))
				$empresa->nombre = $input['nombre'];
			if(isset($input['propietario']))
				$empresa->propietario = $input['propietario'];
			if(isset($input['fecha']))
				$empresa->fecha = $input['fecha'];
			if(isset($input['observaciones']))
				$empresa->observaciones = $input['observaciones'];
			if(isset($input['relacion_puce']))
				$empresa->relacion_puce = $input['relacion_puce'];
			if(isset($input['recomendaciones']))
				$empresa->recomendaciones = $input['recomendaciones'];
			$empresa->save();
			if($empresa->codigo_empresa == Config::get('constants.COD_EMPRESA_ENCUESTA_CHP')){	
					return Redirect::to("/encuesta_control_higiene_personal/empresas/$empresa->id/editar")->with('mensaje', '¡Empresa actualizada exitosamente!');
				}elseif($empresa->codigo_empresa == Config::get('constants.COD_EMPRESA_ENCUESTA_CMAHC')){
					return Redirect::to("/encuesta_manipulacion_comedores/empresas/$empresa->id/editar")->with('mensaje', '¡Empresa actualizada exitosamente!');
				}elseif($empresa->codigo_empresa == Config::get('constants.COD_EMPRESA_ENCUESTA_CMAHB')){
					return Redirect::to("/encuestas_manipulacion_bares/empresas/$empresa->id/editar")->with('mensaje', '¡Empresa actualizada exitosamente!');
				}	
		} else {
				if($empresa->codigo_empresa == Config::get('constants.COD_EMPRESA_ENCUESTA_CHP'))
			    	return Redirect::to("/encuesta_control_higiene_personal/empresas/$empresa->id/editar")->with('mensaje', 'Han ocurrido los siguientes errores:')->withErrors($validator)->withInput();
			    elseif($empresa->codigo_empresa == Config::get('constants.COD_EMPRESA_ENCUESTA_CMAHC'))
			    	return Redirect::to('/encuesta_manipulacion_comedores/nueva_empresa')->with('mensaje', 'Han ocurrido los siguientes errores:')->withErrors($validator)->withInput();
			    elseif($empresa->codigo_empresa == Config::get('constants.COD_EMPRESA_ENCUESTA_CMAHB'))
			    	return Redirect::to('/encuesta_manipulacion_bares/nueva_empresa')->with('mensaje', 'Han ocurrido los siguientes errores:')->withErrors($validator)->withInput();
			}
	}

	public function eliminarEmpresa($id){
		$empresa = Empresa::find($id);
		$codigo_empresa = $empresa->codigo_empresa;
		$nombre_empresa = $empresa->nombre;
		$empresa->delete();
		if($codigo_empresa == Config::get('constants.COD_EMPRESA_ENCUESTA_CHP'))
	    	return Redirect::to('/encuesta_control_higiene_personal/empresas')->with('mensaje', "$nombre_empresa: Empresa eliminada exitosamente.");
	    elseif($codigo_empresa == Config::get('constants.COD_EMPRESA_ENCUESTA_CMAHC')){
	    	return Redirect::to('/encuesta_manipulacion_comedores/empresas')->with('mensaje', "$nombre_empresa: Empresa eliminada exitosamente.");
	    }
	    elseif($codigo_empresa == Config::get('constants.COD_EMPRESA_ENCUESTA_CMAHB')){
			return Redirect::to('/encuestas_manipulacion_bares/empresas')->with('mensaje', "$nombre_empresa: Empresa eliminada exitosamente.");
	    }
	}

}

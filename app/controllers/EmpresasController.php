<?php

class EmpresasController extends BaseController {


	public function nuevaEmpresa()
		{
		return View::make('empresas.new');
		}

	public function nuevaEmpresaCMAHC()
		{
		return View::make('empresas.new_cmahc');
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
				}	

			    
			} else {
				if($input['codigo_empresa'] == Config::get('constants.COD_EMPRESA_ENCUESTA_CHP'))
			    	return Redirect::to('/encuesta_control_higiene_personal/nueva_empresa')->with('mensaje', 'Han ocurrido los siguientes errores:')->withErrors($validator)->withInput();
			    elseif($input['codigo_empresa'] == Config::get('constants.COD_EMPRESA_ENCUESTA_CMAHC'))
			    	return Redirect::to('/encuesta_manipulacion_comedores/nueva_empresa')->with('mensaje', 'Han ocurrido los siguientes errores:')->withErrors($validator)->withInput();
			}
		}
}

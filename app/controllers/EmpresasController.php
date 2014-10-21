<?php

class EmpresasController extends BaseController {


	public function nuevaEmpresa()
		{
		return View::make('empresas.new');
		}

	public function crearEmpresa()
		{
			$input = Input::all();
			$validator = Validator::make($input, Empresa::$rules);
			if ($validator->passes()) {
				$empresa = Empresa::create($input);
				if($empresa->codigo_empresa == 1){	
					return Redirect::to('/encuesta_control_higiene_personal/nueva_encuesta?empresa_id='.$empresa->id);
				}elseif($empresa->codigo_empresa == 2){

				}	

			    
			} else {
			    return Redirect::to('/encuesta_control_higiene_personal/nueva_empresa')->with('mensaje', 'Han ocurrido los siguientes errores:')->withErrors($validator)->withInput();
			}
		}
}

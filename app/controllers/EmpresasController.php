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
				return $empresa;	
			    
			} else {
			    return Redirect::to('/encuesta_control_higiene_personal/nueva_empresa')->with('mensaje', 'Han ocurrido los siguientes errores:')->withErrors($validator)->withInput();
			}
		}
}

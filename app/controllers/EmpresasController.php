<?php

class EmpresasController extends BaseController {

	function __construct() {
        $this->beforeFilter('auth');
    }

	public function indexEmpresasHigienePersonal(){ 
		$empresas = Empresa::where('codigo_empresa','=','1')->get();        
        return View::make('empresas.main', array('empresas' => $empresas, 'codigo' => Config::get('constants.COD_EMPRESA_ENCUESTA_CHP')));
	}

	
	public function indexEncuestasManipulacionComedores(){ 
		$empresas = Empresa::where('codigo_empresa','=','2')->get();        
        return View::make('empresas.main', array('empresas' => $empresas, 'codigo' => Config::get('constants.COD_EMPRESA_ENCUESTA_CMAHC')));
	}	

	public function indexEncuestasManipulacionBares(){ 
		$empresas = Empresa::where('codigo_empresa','=','3')->get();        
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
		return View::make('empresas.view_empleados', array('empresa' => $empresa));
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
		return View::make("empresas.edit_chp", array('empresa' => $empresa));
		}
}

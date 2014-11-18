<?php

class ReportesController extends BaseController {

	function __construct() {
        $this->beforeFilter('auth');
    }	


	public function reporteAntropometria()
	{
		$users = User::has('antropometria')->orderBy('nombre')
                ->orderBy('apellido')->paginate(20);
		return View::make('reportes.antropometria', array('users' => $users));
	}

	public function reporteAntropometriaEstudiante($id)
	{
		$estudiante = User::find($id);		
		return View::make('reportes.antropometria_detalle', array('estudiante' => $estudiante));
	}

	public function reporteBioquimica()
	{
		$users = User::has('bioquimica')->orderBy('nombre')
                ->orderBy('apellido')->paginate(20);
		return View::make('reportes.bioquimica', array('users' => $users));
	}

	public function reporteBioquimicaEstudiante($id)
	{
		$estudiante = User::find($id);		
		return View::make('reportes.bioquimica_detalle', array('estudiante' => $estudiante));
	}

	public function reporteConsumoAlimentos()
	{
		$users = User::has('encuestaAlimentosUniversidad')->orderBy('nombre')
                ->orderBy('apellido')->get();
		return View::make('reportes.consumo_alimento', array('users' => $users));
	}


	public function reporteConsumoAlimentosEstudiante($id)
	{
		$estudiante = User::find($id);		
		return View::make('reportes.consumo_alimento_detalle', array('estudiante' => $estudiante));
	}

	public function reporteConsumoAlimentosBares()
	{
		$users = User::has('encuestaAlimentosBares')->orderBy('nombre')
                ->orderBy('apellido')->get();
		return View::make('reportes.consumo_alimento_bares', array('users' => $users));
	}


	public function reporteConsumoAlimentosBaresEstudiante($id)
	{
		$estudiante = User::find($id);		
		return View::make('reportes.consumo_alimento_bares_detalle', array('estudiante' => $estudiante));
	}


}

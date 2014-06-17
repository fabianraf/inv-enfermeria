<?php

class AntropometriasController extends BaseController {


	public function main()
	{
		$estudiantes = DB::table('usuarios')->where('tipo', '=', 'estudiante')
                                                ->orderBy('apellido')
                                                ->orderBy('nombre')                                                
                                                ->get();
		//$estudiantes = User::where('tipo', '=', 'estudiante');                             
        return View::make('antropometrias.main', array('estudiantes' => $estudiantes));
	}

	public function buscarEstudiantes()
	{
		$campos = Input::all();
		$cedula = $campos['busqueda'];
		$estudiantes = DB::table('usuarios')->where('tipo', '=', 'estudiante')
											->where('cedula', '=', $cedula)
                                                ->orderBy('apellido')
                                                ->orderBy('nombre')                                                
                                                ->get();
		return View::make('antropometrias.main', array('estudiantes' => $estudiantes));                                             

		
	}

	public function ingresarDatos($id)
	{
		$estudiante = User::find($id);

		//return View::make('antropometrias.main', array('estudiantes' => $estudiantes));                                             
		
	}

}

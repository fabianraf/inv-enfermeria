<?php

class EmpleadosController extends BaseController {

	function __construct() {
        $this->beforeFilter('auth');
    }

	public function editarEmpleado($id){
		$empleado = Empleado::find($id);
		$etiquetas = Etiqueta::getEtiquetasPorPosicion(0)->get();
		return View::make('encuestas.nueva_encuesta_control_higiene_personal', array('empleado' => $empleado, 'empresa' => $empleado->empresa, 'etiquetas' => $etiquetas));
	}

	public function eliminarEmpleado($id){
		$empleado = Empleado::find($id);
		$empresa_id = $empleado->empresa_id;
		$empleado->delete();
		return Redirect::to('/encuesta_control_higiene_personal/ver_empleados/' . $empresa_id)->with('mensaje', 'Empelado Eliminado correctamente!');
	}
}

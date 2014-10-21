<?php

class EncuestaControlHigiene extends Eloquent {
	protected $guarded = array();
	protected $table = "encuestas_control_higiene";
	public static $rules = array();

	public function etiquetas()
	{
		return $this->belongsTo('Etiquetas');
	}

	public function empleados()
	{
		return $this->belongsTo('Empleados');
	}

}

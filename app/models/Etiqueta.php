<?php

class Etiqueta extends Eloquent {
	protected $guarded = array();
	protected $table = "etiquetas";
	public static $rules = array();


	public function empleados()
	{
		return $this->hasMany('Empleados');
	}


	public function encuestasControlHigiene()
	{
		return $this->hasMany('EncuestaControlHigiene');
	}
	
}

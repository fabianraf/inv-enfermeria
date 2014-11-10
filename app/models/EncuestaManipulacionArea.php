<?php

class EncuestaManipulacionArea extends Eloquent {
	protected $guarded = array();
	protected $table = "encuestas_manipulacion_areas";
	public static $rules = array();

	public function empresa()
	{
		return $this->belongsTo('Empresa');
	}	
}

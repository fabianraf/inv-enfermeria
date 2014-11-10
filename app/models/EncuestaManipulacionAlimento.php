<?php

class EncuestaManipulacionAlimento extends Eloquent {
	protected $guarded = array();
	protected $table = "encuestas_manipulacion_alimentos";
	public static $rules = array();

	public function empresa()
	{
		return $this->belongsTo('Empresa');
	}	
}

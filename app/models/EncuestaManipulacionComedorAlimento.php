<?php

class EncuestaManipulacionComedorAlimento extends Eloquent {
	protected $guarded = array();
	protected $table = "encuestas_manipulacion_comedores_alimentos";
	public static $rules = array();

	public function empresa()
	{
		return $this->belongsTo('Empresa');
	}	
}

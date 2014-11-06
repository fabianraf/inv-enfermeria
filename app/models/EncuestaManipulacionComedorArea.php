<?php

class EncuestaManipulacionComedorArea extends Eloquent {
	protected $guarded = array();
	protected $table = "encuestas_manipulacion_comedores_areas";
	public static $rules = array();

	public function empresa()
	{
		return $this->belongsTo('Empresa');
	}	
}

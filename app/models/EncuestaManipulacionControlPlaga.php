<?php

class EncuestaManipulacionControlPlaga extends Eloquent {
	protected $guarded = array();
	protected $table = 'encuestas_manipulacion_control_plagas';
	public static $rules = array();

	public function empresa()
	{
		return $this->belongsTo('Empresa');
	}	
}

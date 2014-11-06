<?php

class EncuestaManipulacionComedorControlPlaga extends Eloquent {
	protected $guarded = array();
	protected $table = 'encuestas_manipulacion_comedores_control_plagas';
	public static $rules = array();

	public function empresa()
	{
		return $this->belongsTo('Empresa');
	}	
}

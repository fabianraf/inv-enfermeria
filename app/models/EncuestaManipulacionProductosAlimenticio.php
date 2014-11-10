<?php

class EncuestaManipulacionProductosAlimenticio extends Eloquent {
	protected $guarded = array();
	protected $table = "encuestas_manipulacion_productos_alimenticios";
	public static $rules = array();

	public function empresa()
	{
		return $this->belongsTo('Empresa');
	}	
}

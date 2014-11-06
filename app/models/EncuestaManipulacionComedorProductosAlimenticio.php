<?php

class EncuestaManipulacionComedorProductosAlimenticio extends Eloquent {
	protected $guarded = array();
	protected $table = "encuestas_manipulacion_comedores_productos_alimenticios";
	public static $rules = array();

	public function empresa()
	{
		return $this->belongsTo('Empresa');
	}	
}

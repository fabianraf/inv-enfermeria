<?php

class TiemposComida extends Eloquent {
	protected $guarded = array('id');
	protected $table = 'tiempos_comida';
	public static $rules = array();
	
	public function encuestasTiempoConsumoUniversidades()
	{
		return $this->hasMany('EncuestasTiempoConsumoUniversidades');
	}

	public function encuestasTiempoConsumoBares()
	{
		return $this->hasMany('EncuestasTiempoConsumoBares');
	}
}
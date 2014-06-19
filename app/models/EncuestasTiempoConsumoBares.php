<?php

class EncuestasTiempoConsumoBares extends Eloquent {
	protected $guarded = array();
	protected $table = 'encuestas_tiempo_consumo_bares';
	public static $rules = array();

	public function tiempoComida()
	{
		return $this->belongsTo('TiemposComida');
	}
}
